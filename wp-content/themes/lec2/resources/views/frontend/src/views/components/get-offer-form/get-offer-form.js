import { eliComponent, AbstractComponent } from '@/@core/web/eli-component';
/**
 *
 *
 * @class OfferForm
 */
@eliComponent({
  selector: '.js-offer-form',
})
class OfferForm extends AbstractComponent {
  selfClass = '.offer-form';

  /**
   * Main init offer map
   */
  init() {
    this.$OfferForm = this.find('form');
    this.initValidationRule();
  }

  /**
   * Init offer form validation rule
   */
  initValidationRule() {
    const { $OfferForm } = this;
    const mesage = global.eli.newsletter.newsletter_success_message;
    $OfferForm.formValidator({
      schema: (yup) => {
        return {
          email: yup.string().email().required(),
        };
      },
      onSuccess: async ({ data, form }) => {
        global.swal.fire({
          icon: '',
          title: 'Success',
          html: mesage,
          showConfirmButton: true,
          padding: '4.2rem 3.9rem',
          customClass: {
            container: 'swal2-container--newsletter',
          },
          timer: 5000,
        });
      },
    });
  }
}

export default OfferForm;
