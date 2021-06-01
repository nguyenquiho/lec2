import AbstractController from '@/@core/web/controllers/abstract';
import AjaxService from '@/js/services/AjaxService';
import urlHelper from '@/js/common/helpers/url-helper';

require('px-jquery-pagination');

class TrainingsOverviewListingController extends AbstractController {
  main() {
    this.$scope.trainings = {
      courseList: {},
      category: {},
    };
    const params = urlHelper.getQuery();
    this.current_page = 1;


    this.$trainingBlock = $('.trainings-overview-content');
    this.$FilterForm = this.$trainingBlock.find('.filter-form form');
    this.loadTraningList(params);
    this.setDefaultValue();
    this.initFilterForm();
    this.handlePagination();
  }

  /**
   * Change limit value for mobile
   *
   * @memberof FilterForm
   */
  setDefaultValue() {
    const $search = this.$FilterForm.find('input[name="search"]');
    const $categoryType = this.$FilterForm.find('select[name="training_type_id"]');
    const $category = this.$FilterForm.find('select[name="training_cat_id"]');
    const params = urlHelper.getQuery();

    if (params) {
      if (params.search) {
        $search.val(params.search);
      }

      if (params.training_type_id) {
        $categoryType.selectpicker('val', params.training_type_id);
      }

      if (params.training_cat_id) {
        $category.selectpicker('val', params.training_cat_id);
      }

      if (params.page) {
        this.current_page = params.page;
      }
    }
  }

  /**
   * init filter form
   */
  initFilterForm() {
    const { $FilterForm } = this;

    $FilterForm.formValidator({
      schema: (yup) => {
        return {
          search: yup.mixed(),
        };
      },
      onSuccess: async ({ data, form }) => {
        const query = urlHelper.getQuery();
        urlHelper.removeQuery(query);
        urlHelper.appendQuery(data);
        this.loadTraningList(data);
      },
    });
  }

  async loadTraningList(formData) {
    const _this = this;
    const { $FilterForm } = this;
    const $courseBlock = $('.course-listing-block');
    const posts_per_page = global.viewport.isMobile ? 3 : 10;

    $FilterForm.loading(true);
    $courseBlock.addClass('loading');

    formData = {
      ...formData,
      posts_per_page,
    };

    try {
      const resp = await AjaxService.getInstance().sendFilterCourse(formData, {
        noMessage: true,
      });

      if (resp) {
        this.$scope.trainings = {
          courseList: resp.trainings.data,
          category: resp.category,
        };
        const dataTrainings = resp.trainings;

        const $pagination = $('#pagination-container');
        $pagination.html('');
        if (dataTrainings.total_pages > 1) {
          $pagination.pxpaginate({
            currentpage: dataTrainings.current_page,
            totalPageCount: dataTrainings.total_pages,
            maxBtnCount: 5,
            align: 'center',
            nextPrevBtnShow: true,
            firstLastBtnShow: true,
            callback(pagenumber, el) {
              if (Number(pagenumber) !== 0) {
                urlHelper.appendQuery({
                  page: pagenumber,
                });
                _this.loadTraningList(urlHelper.getQuery());
              }
            },
          });

          this.current_page = dataTrainings.current_page;

          // disale prev button
          if (Number(dataTrainings.current_page) === 1) {
            $pagination.find('.px-btn-prev').addClass('disabled');
          }
          // disale next button
          if (Number(dataTrainings.current_page) === Number(dataTrainings.total_pages)) {
            $pagination.find('.px-btn-next').addClass('disabled');
          }
        }
      }
    } catch (error) {
      console.error(error);
    }
    $FilterForm.loading(false);
    $courseBlock.removeClass('loading');
  }
  /**
 * handlePagination on click
 * Hot fix when next & prev page number is 0
 * @memberof TrainingsOverviewListingController
 */
  handlePagination() {
    $(document).on('click', '.px-btn-prev', (e) => {
      if (Number(e.target.dataset.page) === 0) {
        e.preventDefault();

        urlHelper.appendQuery({
          page: Number(this.current_page) - 1,
        });
        this.loadTraningList(urlHelper.getQuery());
      }
    });

    $(document).on('click', '.px-btn-next', (e) => {
      if (Number(e.target.dataset.page) === 0) {
        e.preventDefault();

        urlHelper.appendQuery({
          page: Number(this.current_page) + 1,
        });
        this.loadTraningList(urlHelper.getQuery());
      }
    });
  }
}

export default TrainingsOverviewListingController;
