import { eliComponent, AbstractComponent } from '@/@core/web/eli-component';
import AjaxService from '@/js/services/AjaxService';

/**
 *
 *
 * @class ContactForm
 */
@eliComponent({
  selector: '.js-modal-form',
})
class ContactForm extends AbstractComponent {
  selfClass = '.modal-form';

  /**
   * Main init contact map
   */
  init() {
    this.$contactForm = this.find('form');
    this.initValidationRule();
  }

  /**
   * Check if current form is in modal
   */
  isInModal() {
    return this.$contactForm.closest('.modal').length;
  }

  /**
   * Init contact form validation rule
   */
  initValidationRule() {
    const { $contactForm } = this;
    const $emailField = $contactForm.find('input[name="email"]');

    $contactForm.formValidator({
      schema: (yup) => {
        return {
          firstname: yup.string().required(),
          email: yup.string().email().required(),
          phone: yup.common.phoneNumber().required(),
          message: yup.string().required(),
          data_protection: yup.common.requiredCheck(),
        };
      },
      onSuccess: async ({ data, form }) => {
        $contactForm.loading(true);
        try {
          let res = null;
          res = await AjaxService.getInstance().sendRequestACall(data, {
            noMessage: true,
          });
          global.swal.fire({
            icon: 'success',
            text: res.message,
            showConfirmButton: false,
            timer: 3000,
          });
          // RESET UI
          form.reset();
          if (this.isInModal()) {
            this.$contactForm.closest('.modal').modal('toggle');
          }
        } catch (error) {
          global.swal.fire({
            icon: 'error',
            text: error.message,
            showConfirmButton: false,
            timer: 3000,
          });
          console.error(error);
        }
        $contactForm.loading(false);
      },
    });
  }
}

export default ContactForm;
