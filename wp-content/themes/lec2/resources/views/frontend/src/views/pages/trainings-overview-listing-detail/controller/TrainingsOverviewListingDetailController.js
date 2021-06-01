import AbstractController from '@/@core/web/controllers/abstract';
import urlHelper from '@/js/common/helpers/url-helper';

class TrainingsOverviewListingDetailController extends AbstractController {
  main() {
    this.initTrainingTabs();
    this.handleSelectExecutionOfTraining();
  }

  initTrainingTabs() {
    const $trainingCard = $('.training-type');
    const $topBuyLink = $('#training_type_id');
    if ($trainingCard.length) {
      $trainingCard.on('click', function () {
        const getDataTarget = $(this).attr('data-target');
        const hrefValue = $(`${getDataTarget} #training_type_id`).val();
        const typeIndex = $(this).data('index');

        $topBuyLink.val(hrefValue);

        $trainingCard.removeClass('selected');
        $(this).addClass('selected');
        $('.training-body .training-container').removeClass('show');
        $(`.training-body ${getDataTarget}`).addClass('show');
        $('.agenda-block .container').removeClass('show');
        $(`.agenda-block ${getDataTarget}`).addClass('show');

        if (getDataTarget === '#training-type-2') {
          $('.slick-track div:first-child').removeClass('move-item-to-first');
          $('.slick-track div:first-child').addClass('move-item-to-last');
        }

        if (getDataTarget === '#training-type-1') {
          $('.slick-track div:first-child').removeClass('move-item-to-last');
          $('.slick-track div:first-child').addClass('move-item-to-first');
        }

        // Set index to url
        urlHelper.appendQuery({
          type: typeIndex,
        });
      });

      // Type index from url
      const urlTypeIndex = urlHelper.getQuery().type;
      const $targetCard = $(`.training-type[data-index="${urlTypeIndex}"]`);

      if ($targetCard.length) {
        $targetCard.click();
      } else {
        $trainingCard[0].click();
      }
    } else {
      $topBuyLink.hide();
    }
  }
  handleSelectExecutionOfTraining() {
    const $handleSelectFormat = $('[name="executionOfTraining"]');
    $handleSelectFormat.on('changed.bs.select', (e, clickedIndex, isSelected) => {
      const val = $(e.target).val();
      const $trainingContainer = $(e.target).closest('.training-container');
      const $format = $trainingContainer.find('.training-body-row--format');
      const $dates = $trainingContainer.find('.training-body-row--date');
      if (val === 'live_video') {
        $format.removeClass('hidden');
        $dates.removeClass('hidden');
      } else {
        $format.addClass('hidden');
        $dates.addClass('hidden');
      }
    });
  }
}

export default TrainingsOverviewListingDetailController;
