import AbstractController from '@/@core/web/controllers/abstract';
import AjaxService from '@/js/services/AjaxService';

class NewsController extends AbstractController {
  main() {
    this.slickOption = {
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      autoplay: false,
      infinite: false,
      centerPadding: '20px',
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            initialSlide: 2,
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 767,
          settings: {
            initialSlide: 1,
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    };


    this.$newsBlock = $('.news-card-block');
    this.$LoadMoreBtn = this.$newsBlock.find('#loadMore');

    this.$newsList = this.$newsBlock.find('#news-item-listing');

    this.$scope.newsList = {
      items: [],
    };

    this.getMorePostFirst();
    this.initLoadMorePost();
  }

  getMorePost = async (postsPerPage) => {
    const {
      $LoadMoreBtn, $newsList, $newsBlock,
    } = this;

    const data = {
      postsPerPage,
    };

    $newsList.loading(true);
    $LoadMoreBtn.hide();

    try {
      const resp = await AjaxService.getInstance().getMorePost(data);
      if (resp) {
        this.$scope.newsList = {
          items: [...this.$scope.newsList.items, ...resp.data],
        };

        if (global.viewport.isMobile || global.viewport.isTablet) {
          $newsList.slick(this.slickOption);
        }
      }
    } catch (error) {
      console.error(error);
    }
    $newsList.loading(false);
    $LoadMoreBtn.show();
  }

  getMorePostFirst() {
    this.getMorePost(12);
  }

  initLoadMorePost() {
    const { $LoadMoreBtn, $newsFeedBlock, $slickSlider } = this;
    $LoadMoreBtn.on('click', () => {
      this.getMorePost(4);
      $LoadMoreBtn.hide();
    });
  }
}

export default NewsController;
