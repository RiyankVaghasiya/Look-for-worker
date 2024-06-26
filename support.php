<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Support page</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/media-queries.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <nav class="navbar">
    <div class="container main-nav flex width">
      <a href="index.php" class="logo-image">
        <img src="./assets/image/logo.png" alt="look for worker logo" />
      </a>
      <div class="nav-links" id="nav-links">
        <ul class="flex">
          <li>
            <a href="index.php" class="hover-links">Home </a>
          </li>
          <li>
            <a href="worker-profile.php" class="hover-links">Worker profile
            </a>
          </li>
          <li>
            <a href="find-worker.php" class="hover-links">Find Worker</a>
          </li>
          <li><a href="support.php" class="hover-links"> Support</a></li>
          <li>
            <a href="./admin/admin.html" class="hover-links"> Admin </a>
          </li>

          <li>
            <a href="index.php#register-scroll" class="hover-links primary-btn">Register </a>
          </li>
        </ul>
      </div>
      <a href="#" class="nav-toogle hover-links" id="nav-toggle" onclick="addclass()">
        <img src="./assets/image/bars-solid.svg" alt="ham-icon" height="20px" />
      </a>
    </div>
  </nav>
  <div class="login-register-popup flex">
    <div class="login-container support" id="login-box">
      <div class="login-info flex">
        <h6>Sign in</h6>
        <div class="small-bold-text size red">
          Note:- *this is for customer only
        </div>
        <div class="login-form flex">
          <input type="text" class="login-email" placeholder="Enter email address" />
          <input type="password" class="login-email" name="pass" id="pass" placeholder="Enter password" />
        </div>
        <a class="forgot-pass" href="#" style="padding: 0">Forgot password?</a>
        <div class="small-bold-text flex conditions" style="gap: 10px">
          <input type="checkbox" name="conditions" id="conditions" />
          <label for="conditions" style="cursor: pointer">I accept terms and conditions of look for worker</label>
        </div>
        <a href="#" class="primary-btn login-btn" style="margin-top: 15px">Proceed</a>
      </div>
    </div>

    <div class="new-account-container support" id="new-account-box">
      <div class="login-info flex">
        <h6>Register</h6>
        <div class="small-bold-text size red">
          Note:- *this is for customer only
        </div>
        <div class="login-form flex">
          <input type="text" class="account-fname login-email" placeholder="Firstname" />
          <input type="text" class="account-lname login-email" placeholder="Lastname" />
          <input type="text" class="login-email login-email" placeholder="Enter email address" />
          <input type="password" class="login-email" name="pass" id="pass" placeholder="Create password" />
          <input type="password" class="login-email" name="pass" id="pass" placeholder="Confirm password" />
        </div>

        <div class="small-bold-text flex conditions" style="gap: 10px">
          <input type="checkbox" name="new-account-condition" id="new-account-condition" />
          <label for="new-account-condition" style="cursor: pointer">I accept terms and conditions of look for worker</label>
        </div>
        <a href="#" class="primary-btn login-btn" style="margin-top: 15px">Proceed</a>
      </div>
    </div>
  </div>
  <!-- FAQ's -->
  <div class="faq container">
    <div class="faq-header">
      <h2>FAQ</h2>
    </div>
    <div class="faq-questions">
      <div class="accordion">
        <div class="accordion-item">
          <div class="accordion-item-header small-bold-text">
            Who are we ?
          </div>

          <!-- /.accordion-item-header -->
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              Look for worker is a best platform for skill worker. The
              platform where skill worker can find work. since 2022 , we
              helped to connect 1000 worker to needy customers.
            </div>
          </div>
          <!-- /.accordion-item-body -->
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header small-bold-text">
            How does my worker profile request work?
          </div>
          <!-- /.accordion-item-header -->
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              Making worker profile is simple, quick and without obligation.
              you fill out the information related to your work and your
              contact information. Your profile is then shows to customers in
              your region who contact you to offer you their offers. All you
              have to do is make satisfy your customer with your good service.
            </div>
          </div>
          <!-- /.accordion-item-body -->
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header small-bold-text">
            Why use the Look for worker service?
          </div>
          <!-- /.accordion-item-header -->
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              Look for worker allows you to select the best craftsmen to carry
              out your work and to compare the worker profile and choose out
              the worker which fill out your requirements. In addition to
              being free, the Look for worker service is simple and fast!
            </div>
          </div>
          <!-- /.accordion-item-body -->
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header small-bold-text">
            Am I committed by my work request?
          </div>
          <!-- /.accordion-item-header -->
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              After choosing one of the available options, customers will have
              the opportunity to request your services. If you decide to
              decline a customer's request, a 10% reduction in your earnings
              will be applied.
            </div>
          </div>
          <!-- /.accordion-item-body -->
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header small-bold-text">
            What should I consider when choosing a worker?
          </div>
          <!-- /.accordion-item-header -->
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              First check the availablity of the worker, if worker is
              available then proceed to next step, Here is some parameters
              which you have to consider before choosing the worker "check the
              worker profile, recent work, work experience, reviews & feedback
              from recent work of worker, is this fit in your budget?" if this
              full fill your requirements then surely go for it!
            </div>
          </div>
          <!-- /.accordion-item-body -->
        </div>
        <!-- /.accordion-item -->
      </div>
    </div>
  </div>
  <div class="support-ticket container">
    <div class="ticket-header">
      <h2 style="color: #ff9502; text-align: center">
        Have a any complaint?
      </h2>
    </div>
    <div class="ticket-content">
      <div class="ticket-content-header flex">
        <a href="#" id="my-ticket">My Tickets</a>
        <a href="#" id="customer-care">Customer care</a>
      </div>
      <div class="ticket-content-form">
        <div class="form-subject flex">
          <label for="subject" id="subject-label">Subject</label>
          <input type="text" id="subject" placeholder="Purpose to write a ticket" />
        </div>
        <div class="form-subject flex">
          <label for="subject" id="subject-label">Description</label>
          <textarea name="complaine-description" id="subject" cols="30" rows="10" placeholder="Explain in brief..."></textarea>
        </div>
        <div class="form-subject flex">
          <label for="subject" id="subject-label">Attachments</label>
          <input type="file" name="file" id="subject" class="choose-file" />
          <p class="upload-criteria">
            You can upload up to 2 files(maximum 2 MB each) of the following
            types: .jpg, .jpeg, .png ,.pdf, .doc, .ppt ,.zip ,.mp3 ,.mp4
          </p>
        </div>
        <div class="ticket-btn">
          <a href="#" class="primary-btn">SUBMIT TICKET</a>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div class="subfooter">
    <div class="container">
      <div class="subfooter-container flex">
        <a href="#" class="hover-links">Privacy policy</a>
        <a href="#" class="hover-links">Terms & conditions</a>
        <a href="#" class="hover-links">Security information</a>
        <a href="#" class="hover-links">
          <img src="./assets/image/asset 28.png" alt="facbook logo" />
        </a>
        <a href="#" class="hover-links">
          <img src="./assets/image/asset 29.png" alt="skype logo" />
        </a>
        <a href="#" class="hover-links">
          <img src="./assets/image/asset 30.png" alt="linked-in logo" /></a>
        <a href="#" class="hover-links">
          <img src="./assets/image/asset 31.png" alt="youtube logo" /></a>
      </div>
    </div>
  </div>
  <script>
    const accordionItemHeaders = document.querySelectorAll(
      ".accordion-item-header"
    );

    accordionItemHeaders.forEach((accordionItemHeader) => {
      accordionItemHeader.addEventListener("click", (event) => {
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
          accordionItemBody.style.maxHeight =
            accordionItemBody.scrollHeight + "px";
        } else {
          accordionItemBody.style.maxHeight = 0;
        }
      });
    });
  </script>
</body>

</html>