
  <!-- Contact Form Section -->
  <section id="form" data-aos="fade-down">
    <div class="container">
      <h3 class="form__title">
        Contact & Inquiry
      </h3>
      <div class="form__wrapper">
        <form name="contact" method="POST" netlify>
          <div class="form__group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="First Name" required>
          </div>
          <div class="form__group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="Last Name" required>
          </div>
          <div class="form__group">
            <label for="email">Email</label>
            <input type="email" id="email" name="Email" required>
          </div>
          <div class="form__group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="Subject" required>
          </div>
          <div class="form__group form__group__full">
            <label for="message">Message</label>
            <textarea name="Message" id="message" cols="30" rows="10" required></textarea>
          </div>
          <button type="submit" class="btn primary-btn">Send</button>
          <input type="hidden" name="id" value="contact">
        </form>
        <br>
  <!-- End Contact Form Section-->
  