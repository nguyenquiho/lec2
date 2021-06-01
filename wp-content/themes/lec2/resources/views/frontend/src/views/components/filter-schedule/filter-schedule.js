import { eliComponent } from '@/@core/web/eli-component';
import AbstractController from '@/@core/web/controllers/abstract';
import AjaxService from '@/js/services/AjaxService';
import urlHelper from '@/js/common/helpers/url-helper';

require('px-jquery-pagination');

/**
 *
 *
 * @class FilterShorties
 */
@eliComponent({
  selector: '.js-filter-schedule-form',
})
class FilterShorties extends AbstractController {
  selfClass = '.filter-schedule-form';

  /**
   * Main init schedule form
   */
  main() {
    this.$FilterBlock = $('.filter-schedule-form');
    this.$FilterForm = this.$FilterBlock.find('form');
    this.formData = { posts_per_page: 4 };
    const $typeId = $('#type_select');

    $('#fromDatepicker').datepicker({
      uiLibrary: 'bootstrap4',
    });

    $('#toDatepicker').datepicker({
      uiLibrary: 'bootstrap4',
    });

    const $location = $('.location');
    const $datePicker = $('.date-picker');
    const $keyword = $('.keyword');

    $location.hide();
    $datePicker.hide();
    $keyword.hide();

    $typeId.on('change', function () {
      const optionSelected = $(this).find('option:selected');
      const textSelected = optionSelected.val();
      if (textSelected === 'location') {
        $location.show();
        $datePicker.hide();
        $keyword.hide();
      }

      if (textSelected === 'date') {
        $datePicker.show();
        $location.hide();
        $keyword.hide();
      }

      if (textSelected === 'type') {
        $keyword.show();
        $location.hide();
        $datePicker.hide();
      }

      if (textSelected === 'all') {
        $location.hide();
        $datePicker.hide();
        $keyword.hide();
      }
    });

    this.$scope.courseList = {
      items: [],
    };

    this.loadTraningListSchedule({ type_id: 'all' });
    this.initFilterFormSchedule();
    this.handlePaginationSchedule();
  }

  /**
   * init filter form
   */
  initFilterFormSchedule() {
    const { $FilterForm } = this;

    $FilterForm.formValidator({
      schema: (yup, formValidator) => {
        const formData = formValidator.getData();

        return {
          keyword: formData.type_id === 'type' ? yup.string().required() : yup.mixed(),
        };
      },
      onSuccess: async ({ data, form }) => {
        this.loadTraningListSchedule(data);
      },
    });
  }

  async loadTraningListSchedule(formData) {
    const { $FilterForm } = this;
    const $courseBlock = $('.filter-schedule-form');

    $FilterForm.loading(true);
    $courseBlock.addClass('loading');
    switch (formData && formData.type_id) {
      case 'location':
        delete this.formData.from;
        delete this.formData.to;
        delete this.formData.keyword;
        this.formData.location_id = formData.location_id;
        break;
      case 'date':
        delete this.formData.location_id;
        delete this.formData.keyword;
        this.formData.from = formData.from;
        this.formData.to = formData.to;
        break;
      case 'type':
        delete this.formData.from;
        delete this.formData.to;
        delete this.formData.location_id;
        this.formData.keyword = formData.keyword;
        break;
      default:
        break;
    }
    this.formData = {
      ...this.formData,
      posts_per_page: 4,
    };

    try {
      const resp = await AjaxService.getInstance().sendShortiesCourse(this.formData, {
        noMessage: true,
      });

      if (resp) {
        this.$scope.courseList = {
          items: [...resp.items.data],
        };

        const $pagination = $('#pagination-schedule');
        $pagination.html('');
        if (resp.items.total_pages > 1) {
          this.current_page = resp.items.current_page;

          // first page
          if (Number(resp.items.current_page) === 1) {
            $pagination.html(`<div class="page-num page-num--first" data-page="${resp.items.next_page}">More <em class="icon-chevron-right-solid"></em></div>`);
          } else {
            let html = `<div class="page-num page-num--prev" data-page="${resp.items.current_page - 1}"><em class="icon-arrow-left"></em></div>`;
            html = html.concat(`<div class="page-num page-num--current" data-page="${resp.items.next_page}">Next</div>`);
            html = html.concat(`<div class="page-num page-num--next" data-page="${resp.items.next_page}"><em class="icon-arrow-right"></em></div>`);
            $pagination.html(html);
          }
          // disable next button
          if (Number(resp.items.current_page) === Number(resp.items.total_pages)) {
            $pagination.find('.page-num--next').addClass('disabled');
          }
        }
      }
    } catch (error) {
      console.error(error);
    }
    $FilterForm.loading(false);
    $courseBlock.removeClass('loading');
  }

  handlePaginationSchedule() {
    const _this = this;
    $(document).on('click', '#pagination-schedule .page-num', function () {
      _this.formData = {
        ..._this.formData,
        page: $(this).data('page'),
      };

      _this.loadTraningListSchedule(_this.formData);
    });
  }
}

export default FilterShorties;
