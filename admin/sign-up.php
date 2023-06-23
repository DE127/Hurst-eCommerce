<!-- hàm php tạo tài khoản và password_hash() để mã hóa password -->
<?php
require_once('config/config.php');

// nếu nhấn đăng ký
if (isset($_POST['signup'])) {
  // Lấy thông tin đăng ký từ biểu mẫu
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $fullname = $first_name . " " . $last_name;
  $username = strtolower(str_replace(' ', '', $fullname));
  $email = $_POST['email'];
  $password = $_POST['password'];
  $status = 1;
  $role = 1;

  // Mã hóa mật khẩu
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Lưu thông tin đăng ký vào cơ sở dữ liệu

  $sql = "INSERT INTO admin (username, email, password, fullname, status, role) VALUES ('$username', '$email', '$hashed_password', '$fullname', '$status', '$role');";
  if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
  header("Location:index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
  <base href="" />
  <title>Hurst - Admin Dashboards</title>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
  <!--begin::Fonts(mandatory for all pages)-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
  <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank">
  <!--begin::Theme mode setup on page load-->
  <script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
  <!--end::Theme mode setup on page load-->
  <!--begin::Root-->
  <div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
      <!--begin::Logo-->
      <a href="index.php" class="d-block d-lg-none mx-auto py-20">
        <img alt="Logo" src="assets/media/logos/default.svg" class="theme-light-show h-25px" />
        <img alt="Logo" src="assets/media/logos/default-dark.svg" class="theme-dark-show h-25px" />
      </a>
      <!--end::Logo-->
      <!--begin::Aside-->
      <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
        <!--begin::Wrapper-->
        <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
          <!--begin::Header-->
          <div class="d-flex flex-stack py-2">
            <!--begin::Back link-->
            <div class="me-2">
              <a href="<?php echo '?'; ?>" class="btn btn-icon bg-light rounded-circle">
                <i class="ki-duotone ki-black-left fs-2 text-gray-800"></i>
              </a>
            </div>
            <!--end::Back link-->
            <!--begin::Sign Up link-->
            <div class="m-0">
              <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-up-head-desc">Already a member
                ?</span>
              <a href="<?php echo 'index.php'; ?>" class="link-primary fw-bold fs-5"
                data-kt-translate="sign-up-head-link">Sign In</a>
            </div>
            <!--end::Sign Up link=-->
          </div>
          <!--end::Header-->
          <!--begin::Body-->
          <div class="py-20">
            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="" action="" method="post">
              <!--begin::Heading-->
              <div class="text-start mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-up-title">Create an Account</h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Get unlimited access.</div>
                <!--end::Link-->
              </div>
              <!--end::Heading-->
              <!--begin::Input group-->
              <div class="row fv-row mb-7">
                <!--begin::Col-->
                <div class="col-xl-6">
                  <input class="form-control form-control-lg form-control-solid" type="text" placeholder="First Name"
                    name="firstname" autocomplete="off" data-kt-translate="sign-up-input-first-name" />
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                  <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Last Name"
                    name="lastname" autocomplete="off" data-kt-translate="sign-up-input-last-name" />
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="fv-row mb-10">
                <input class="form-control form-control-lg form-control-solid" type="email" placeholder="Email"
                  name="email" autocomplete="off" data-kt-translate="sign-up-input-email" />
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="fv-row mb-10" data-kt-password-meter="true">
                <!--begin::Wrapper-->
                <div class="mb-1">
                  <!--begin::Input wrapper-->
                  <div class="position-relative mb-3">
                    <input class="form-control form-control-lg form-control-solid" type="password"
                      placeholder="Password" name="password" autocomplete="off"
                      data-kt-translate="sign-up-input-password" />
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                      data-kt-password-meter-control="visibility">
                      <i class="ki-duotone ki-eye-slash fs-2"></i>
                      <i class="ki-duotone ki-eye fs-2 d-none"></i>
                    </span>
                  </div>
                  <!--end::Input wrapper-->
                  <!--begin::Meter-->
                  <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                  </div>
                  <!--end::Meter-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Hint-->
                <div class="text-muted" data-kt-translate="sign-up-hint">Use 8 or more characters with a mix of letters,
                  numbers & symbols.</div>
                <!--end::Hint-->
              </div>
              <!--end::Input group=-->
              <!--begin::Input group-->
              <div class="fv-row mb-10">
                <input class="form-control form-control-lg form-control-solid" type="password"
                  placeholder="Confirm Password" name="confirm-password" autocomplete="off"
                  data-kt-translate="sign-up-input-confirm-password" />
              </div>
              <!--end::Input group-->
              <!--begin::Actions-->
              <div class="d-flex flex-stack">
                <!--begin::Submit-->
                <button type="submit" id="kt_sign_up_submit" name="signup" class="btn btn-primary" data-kt-translate="sign-up-submit">
                  <!--begin::Indicator label-->
                  <span class="indicator-label">Submit</span>
                  <!--end::Indicator label-->
                  <!--begin::Indicator progress-->
                  <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  <!--end::Indicator progress-->
                </button>
                <!--end::Submit-->
                <!--begin::Social-->
                <div class="d-flex align-items-center">
                  <div class="text-gray-400 fw-semibold fs-6 me-6">Or</div>
                  <!--begin::Symbol-->
                  <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                    <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="p-4" />
                  </a>
                  <!--end::Symbol-->
                  <!--begin::Symbol-->
                  <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                    <img alt="Logo" src="assets/media/svg/brand-logos/facebook-3.svg" class="p-4" />
                  </a>
                  <!--end::Symbol-->
                  <!--begin::Symbol-->
                  <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light">
                    <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show p-4" />
                    <img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg"
                      class="theme-dark-show p-4" />
                  </a>
                  <!--end::Symbol-->
                </div>
                <!--end::Social-->
              </div>
              <!--end::Actions-->
            </form>
            <!--end::Form-->
          </div>
          <!--end::Body-->
          <!--begin::Footer-->
          <div class="m-0">
            <!--begin::Toggle-->
            <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click"
              data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
              <img data-kt-element="current-lang-flag" class="w-25px h-25px rounded-circle me-3"
                src="assets/media/flags/united-states.svg" alt="" />
              <span data-kt-element="current-lang-name" class="me-2">English</span>
              <i class="ki-duotone ki-down fs-2 text-muted rotate-180 m-0"></i>
            </button>
            <!--end::Toggle-->
            <!--begin::Menu-->
            <div
              class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4"
              data-kt-menu="true" id="kt_auth_lang_menu">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                  <span class="symbol symbol-20px me-4">
                    <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/united-states.svg"
                      alt="" />
                  </span>
                  <span data-kt-element="lang-name">English</span>
                </a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                  <span class="symbol symbol-20px me-4">
                    <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                  </span>
                  <span data-kt-element="lang-name">Spanish</span>
                </a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                  <span class="symbol symbol-20px me-4">
                    <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                  </span>
                  <span data-kt-element="lang-name">German</span>
                </a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                  <span class="symbol symbol-20px me-4">
                    <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                  </span>
                  <span data-kt-element="lang-name">Japanese</span>
                </a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                  <span class="symbol symbol-20px me-4">
                    <img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                  </span>
                  <span data-kt-element="lang-name">French</span>
                </a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Aside-->
      <!--begin::Body-->
      <div
        class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat"
        style="background-image: url(assets/media/auth/bg11.png)"></div>
      <!--begin::Body-->
    </div>
    <!--end::Authentication - Sign-up-->
  </div>
  <!--end::Root-->
  <!--begin::Javascript-->
  <script>var hostUrl = "assets/";</script>
  <!--begin::Global Javascript Bundle(mandatory for all pages)-->
  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <!--end::Global Javascript Bundle-->
  <!--begin::Custom Javascript(used for this page only)-->
  <script src="assets/js/custom/authentication/sign-in/i18n.js"></script>
  <!--end::Custom Javascript-->
  <!--end::Javascript-->
</body>
<!--end::Body-->

</html>