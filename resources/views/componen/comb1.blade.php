@section('sitenav')
<div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header">
            <div class="d-flex justify-content-between">
              <div class="logo">
                <a href="index.html">
                  <!-- <img src="{{url('/dist/')}}/assets/images/logo/logo.png" alt="Logo" srcset=""> -->
                  <h4>SmartBee</h4>
                </a>
              </div>
              <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block">
                  <i class="bi bi-x bi-middle"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Menu</li>
              <li class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'>
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <!-- <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-stack"></i>
                  <span>Components</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="component-alert.html">Alert</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-badge.html">Badge</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-breadcrumb.html">Breadcrumb</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-button.html">Button</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-card.html">Card</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-carousel.html">Carousel</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-dropdown.html">Dropdown</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-list-group.html">List Group</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-modal.html">Modal</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-navs.html">Navs</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-pagination.html">Pagination</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-progress.html">Progress</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-spinner.html">Spinner</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="component-tooltip.html">Tooltip</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-collection-fill"></i>
                  <span>Extra Components</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="extra-component-avatar.html">Avatar</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="extra-component-sweetalert.html">Sweet Alert</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="extra-component-toastify.html">Toastify</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="extra-component-rating.html">Rating</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="extra-component-divider.html">Divider</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-grid-1x2-fill"></i>
                  <span>Layouts</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="layout-default.html">Default Layout</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="layout-vertical-1-column.html">1 Column</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="layout-vertical-navbar.html">Vertical Navbar</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="layout-rtl.html">RTL Layout</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="layout-horizontal.html">Horizontal Menu</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-title">Forms &amp; Tables</li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-hexagon-fill"></i>
                  <span>Form Elements</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="form-element-input.html">Input</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="form-element-input-group.html">Input Group</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="form-element-select.html">Select</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="form-element-radio.html">Radio</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="form-element-checkbox.html">Checkbox</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="form-element-textarea.html">Textarea</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item  ">
                <a href="form-layout.html" class='sidebar-link'>
                  <i class="bi bi-file-earmark-medical-fill"></i>
                  <span>Form Layout</span>
                </a>
              </li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-pen-fill"></i>
                  <span>Form Editor</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="form-editor-quill.html">Quill</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="form-editor-ckeditor.html">CKEditor</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="form-editor-summernote.html">Summernote</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="form-editor-tinymce.html">TinyMCE</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                  <i class="bi bi-grid-1x2-fill"></i>
                  <span>Table</span>
                </a>
              </li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                  <span>Datatables</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="table-datatable.html">Datatable</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="table-datatable-jquery.html">Datatable (jQuery)</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-title">Extra UI</li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-pentagon-fill"></i>
                  <span>Widgets</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="ui-widgets-chatbox.html">Chatbox</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="ui-widgets-pricing.html">Pricing</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="ui-widgets-todolist.html">To-do List</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-egg-fill"></i>
                  <span>Icons</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                  </li>
                  <li class="submenu-item ">
                    <a href="ui-icons-fontawesome.html">Fontawesome</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="ui-icons-dripicons.html">Dripicons</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-bar-chart-fill"></i>
                  <span>Charts</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="ui-chart-chartjs.html">ChartJS</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="ui-chart-apexcharts.html">Apexcharts</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item  ">
                <a href="ui-file-uploader.html" class='sidebar-link'>
                  <i class="bi bi-cloud-arrow-up-fill"></i>
                  <span>File Uploader</span>
                </a>
              </li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-map-fill"></i>
                  <span>Maps</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="ui-map-google-map.html">Google Map</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-title">Pages</li>
              <li class="sidebar-item  ">
                <a href="application-email.html" class='sidebar-link'>
                  <i class="bi bi-envelope-fill"></i>
                  <span>Email Application</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="application-chat.html" class='sidebar-link'>
                  <i class="bi bi-chat-dots-fill"></i>
                  <span>Chat Application</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="application-gallery.html" class='sidebar-link'>
                  <i class="bi bi-image-fill"></i>
                  <span>Photo Gallery</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="application-checkout.html" class='sidebar-link'>
                  <i class="bi bi-basket-fill"></i>
                  <span>Checkout Page</span>
                </a>
              </li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-person-badge-fill"></i>
                  <span>Authentication</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="auth-login.html">Login</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="auth-register.html">Register</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="auth-forgot-password.html">Forgot Password</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                  <i class="bi bi-x-octagon-fill"></i>
                  <span>Errors</span>
                </a>
                <ul class="submenu ">
                  <li class="submenu-item ">
                    <a href="error-403.html">403</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="error-404.html">404</a>
                  </li>
                  <li class="submenu-item ">
                    <a href="error-500.html">500</a>
                  </li>
                </ul>
              </li>
              <li class="sidebar-title">Raise Support</li>
              <li class="sidebar-item  ">
                <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                  <i class="bi bi-life-preserver"></i>
                  <span>Documentation</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                  <i class="bi bi-puzzle"></i>
                  <span>Contribute</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                  <i class="bi bi-cash"></i>
                  <span>Donate</span>
                </a>
              </li> -->
            </ul>
          </div>
          <button class="sidebar-toggler btn x">
            <i data-feather="x"></i>
          </button>
        </div>
      </div>
@endsection

@section('link')
<header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
</header>
<div class="page-heading">
          <h3>SmartBee IOT</h3>
</div>
@endsection

@section('tombo1')
<label>
	<!-- <input class="pristine" type="checkbox" name="switch" value="on"> -->
  <input class="pristine" type="checkbox" name="switch" onclick="valkan()" value="on" id="tombolbim">
</label>
<style>
    label, label:before, input[type=checkbox]:before, input[type=checkbox]:after {
    box-sizing: border-box;
    display: block;
  }
  label {
    --transDur: 0.2s;
    --shadowA: 
      -1.5em 0 1.5em #8d273100,
      1.5em 0 1.5em #8d273100,
      0 0 3em #8d273144,
      0 6.5em 3em #0002;
    --shadowB:
      -1.5em 0 1.5em #8d273100,
      1.5em 0 1.5em #8d273100,
      0 3.25em 3em #8d273144,
      0 6.5em 3em #0002;
    --shadowC:
      -1.5em 0 1.5em #8d273177,
      1.5em 0 1.5em #8d273177,
      0 3.25em 3em #8d273144,
      0 6.5em 3em #0002;
    --shadowD:
      -1.5em 0 1.5em #8d273177,
      1.5em 0 1.5em #8d273177,
      0 6.5em 3em #8d273144,
      0 6.5em 3em #0002;
    --switchOnA:
      linear-gradient(90deg,#ecc0,#ecc 0.05em 0.45em,#ecc0) 50% 50% / 0.5em 4em no-repeat,
      linear-gradient(90deg,#0000,#0002 0.25em 0.75em,#0000) 50% 50% / 1em 4em no-repeat,
      linear-gradient(#0000,#0003 0.25em 4.25em,#0000) 50% 50% / 0.5em 4.5em no-repeat,
      radial-gradient(12em 6em at 0 0,#95001100 25%,#95001100 50%),
      radial-gradient(12em 6em at 100% 0,#95001100 25%,#95001100 50%),
      radial-gradient(100% 75% at center,#ff002c,#ff002c00 50%) 0 0 / 0.6em 0.6em,
      radial-gradient(6em 9em at 50% 10%,#ff002c00,#ff002c00 50%),
      radial-gradient(12em 6em at 0 90%,#ff002c00,#ff002c00 50%),
      radial-gradient(12em 6em at 100% 90%,#ff002c00,#ff002c00 50%),
      radial-gradient(9em 9em at 53% 87.5%,#ffc56400 5%,#ff002c00 20%,#ff002c00 50%),
      linear-gradient(#a90020 87.5%,#d4001d);
    --switchOnB:
      linear-gradient(90deg,#ecc0,#ecc 0.05em 0.45em,#ecc0) 50% 50% / 0.5em 4em no-repeat,
      linear-gradient(90deg,#0000,#0002 0.25em 0.75em,#0000) 50% 50% / 1em 4em no-repeat,
      linear-gradient(#0000,#0003 0.25em 4.25em,#0000) 50% 50% / 0.5em 4.5em no-repeat,
      radial-gradient(12em 6em at 0 0,#950011 25%,#95001100 50%),
      radial-gradient(12em 6em at 100% 0,#950011 25%,#95001100 50%),
      radial-gradient(100% 75% at center,#ff002c,#ff002c00 50%) 0 0 / 0.6em 0.6em,
      radial-gradient(6em 9em at 50% 10%,#ff002c,#ff002c00 50%),
      radial-gradient(12em 6em at 0 90%,#ff002c,#ff002c00 50%),
      radial-gradient(12em 6em at 100% 90%,#ff002c,#ff002c00 50%),
      radial-gradient(9em 9em at 53% 87.5%,#ffc564 5%,#ff002c 20%,#ff002c00 50%),
      linear-gradient(#950011 87.5%,#c10017);
    --switchOffA:
      radial-gradient(4em 4em at center,#ecc0 1.45em,#ecc 1.5em 1.95em,#ecc0 2em),
      radial-gradient(5em 5em at center,#0000 1em,#0002 1.5em 2em,#0000 2.5em),
      radial-gradient(100% 75% at center,#ff002c 25%,#ff002c00 50%) 0 0 / 0.6em 0.6em,
      radial-gradient(4em 12em at 50% 100%,#ff002c00,#ff002c00 50%),
      radial-gradient(12em 6em at 0 10%,#ff002c00,#ff002c00 50%),
      radial-gradient(12em 6em at 100% 10%,#ff002c00,#ff002c00 50%),
      radial-gradient(9em 9em at 50% 12.5%,#ffc56400 5%,#ff002c00 20%,#ff002c00 50%),
      linear-gradient(#c10017,#c10017);
    --switchOffB:
      radial-gradient(4em 4em at center,#ecc0 1.45em,#ecc 1.5em 1.95em,#ecc0 2em),
      radial-gradient(5em 5em at center,#0000 1em,#0002 1.5em 2em,#0000 2.5em),
      radial-gradient(100% 75% at center,#ff002c 25%,#ff002c00 50%) 0 0 / 0.6em 0.6em,
      radial-gradient(4em 12em at 50% 100%,#ff002c,#ff002c00 50%),
      radial-gradient(12em 6em at 0 10%,#ff002c,#ff002c00 50%),
      radial-gradient(12em 6em at 100% 10%,#ff002c,#ff002c00 50%),
      radial-gradient(9em 9em at 50% 12.5%,#ffc564 5%,#ff002c 20%,#ff002c00 50%),
      linear-gradient(#c10017,#c10017);
    border-radius: 0.5em;
    box-shadow:
      0 0.1em 0 #565057,
      0 0 0 0.1em #2e3138,
      0 0 0.2em 0.3em #000 inset,
      0 1em 0.2em 0 #000 inset,
      0 -1em 0.2em 0 #000 inset,
      0.5em 0 0.1em #e7454e inset,
      0.6em 0 0.1em #8d2731 inset,
      -0.5em 0 0.1em #e7454e inset,
      -0.6em 0 0.1em #8d2731 inset,
      0 1.5em 0.2em 0 #800007 inset,
      0 2em 0.2em 0 #8d2731 inset,
      0 3em 0.2em 0 #ff8a90 inset,
      0 4em 0.2em 0 #f8f4f6 inset,
      0 -1.5em 0.3em 0 #a0001c inset,
      0 -2em 0.2em 0 #9f0020 inset,
      0 -3em 0.2em 0 #ae1433 inset,
      0 -3.5em 0.2em 0 #941028 inset;
    font-size: calc(12px + 6 * (100vw - 320px) / (1280 - 320));
    margin: 0% auto;
    position: relative;
    width: 13em;
    height: 17em;
    -webkit-tap-highlight-color: transparent;
  }
  label:before {
    /* background: linear-gradient(#454954,#2a272d); */
    border-radius: 0.25em;
    /* box-shadow:
      0 0 0 0.2em #000 inset,
      0 0.3em 0 0 #737a8c inset; */
    content: "";
    margin: auto;
    position: absolute;
    top: -1.5em;
    left: -1.5em;
    width: 16em;
    height: 20em;
    z-index: -1;
  }
  input[type=checkbox], input[type=checkbox]:before, input[type=checkbox]:after {
    transform-style: preserve-3d;
  }
  input[type=checkbox] {
    animation: shadowOff var(--transDur) ease-in-out;
    border: 0;
    box-shadow: var(--shadowA);
    cursor: pointer;
    font-size: 1em;
    margin: 0;
    padding: 0;
    position: relative;
    top: 1.5em;
    left: 0.5em;
    width: 12em;
    height: 14em;
    transform: rotateX(-20deg) translateZ(0.75em);
    transition: transform var(--transDur) ease-in-out;
    -webkit-appearance: none;
    appearance: none;
  }
  input[type=checkbox]:checked {
    animation: shadowOn var(--transDur) ease-in-out;
    box-shadow: var(--shadowD);
    transform: rotateX(20deg) translateZ(0.75em);
  }
  input[type=checkbox]:before, input[type=checkbox]:after {
    color: #fff;
    content: "";
    filter: brightness(0.7);
    -webkit-filter: brightness(0.7);
    position: absolute;
    text-align: center;
    transition:
      box-shadow var(--transDur) ease-in-out,
      filter var(--transDur) ease-in-out,
      -webkit-filter var(--transDur) ease-in-out;
    width: 100%;
    height: 50%;
  }
  input[type=checkbox]:before {
    animation: switchBeforeOff var(--transDur) steps(1,start);
    background: var(--switchOnA);
    box-shadow:
      0 0.2em 0 0 #fff0 inset,
      -0.5em -0.5em 0.5em #0000,
      0.5em -0.5em 0.5em #0000;
    top: 0;
    transform: rotateX(-20deg);
    transform-origin: 50% 100%;
    z-index: 1;
  }
  input[type=checkbox]:after {
    animation: switchAfterOff var(--transDur) steps(1,start);
    background: var(--switchOffA);
    box-shadow:
      0 -0.2em 0 0 #fff0 inset,
      -0.5em 0 0.5em #0007,
      0.5em 0 0.5em #0007;
    top: 50%;
    transform: rotateX(20deg);
    transform-origin: 50% 0%;
  }
  input[type=checkbox]:checked:before, input[type=checkbox]:checked:after {
    filter: brightness(1);
    -webkit-filter: brightness(1);
  }
  input[type=checkbox]:checked:before {
    animation: switchBeforeOn var(--transDur) steps(1,start) forwards;
    box-shadow:
      0 0.2em 0 0 #fff inset,
      -0.5em -0.5em 0.5em #0007,
      0.5em -0.5em 0.5em #0007;
  }
  input[type=checkbox]:checked:after {
    animation: switchAfterOn var(--transDur) steps(1,start) forwards;
    box-shadow:
      0 -0.2em 0 0 #fff7 inset,
      -0.5em 0 0.5em #0000,
      0.5em 0 0.5em #0000;
  }
  input[type=checkbox]:focus {
    outline: transparent;
  }
  input[type=checkbox].pristine, input[type=checkbox].pristine:before, input[type=checkbox].pristine:after {
    animation: none;
  }

  /* Animations */
  @keyframes shadowOn {
    from {
      box-shadow: var(--shadowA);
    }
    50% {
      box-shadow: var(--shadowB);
    }
    51% {
      box-shadow: var(--shadowC);
    }
    to {
      box-shadow: var(--shadowD);
    }
  }
  @keyframes shadowOff {
    from {
      box-shadow: var(--shadowD);
    }
    50% {
      box-shadow: var(--shadowC);
    }
    51% {
      box-shadow: var(--shadowB);
    }
    to {
      box-shadow: var(--shadowA);
    }
  }
  @keyframes switchBeforeOn {
    from, 50% {
      background: var(--switchOnA);
    }
    to {
      background: var(--switchOnB);
    }
  }
  @keyframes switchBeforeOff {
    from, 50% {
      background: var(--switchOnB);
    }
    to {
      background: var(--switchOnA);
    }
  }
  @keyframes switchAfterOn {
    from, 50% {
      background: var(--switchOffA);
    }
    to {
      background: var(--switchOffB);
        
    }
  }
  @keyframes switchAfterOff {
    from, 50% {
      background: var(--switchOffB);
    }
    to {
      background: var(--switchOffA);
        
    }
  }
</style>
@endsection

@section('tombo2')
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-3">Saat ini</div>
      <div class="col-md-9"><input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" readonly value="30" aria-label=".form-control-lg example"></div>
    </div>
  </div>
    <div class="col-md-12">
    <div class="row">
      <div class="col-md-3">Rubah Ke</div>
      <div class="col-md-9"><input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" value="30" aria-label=".form-control-lg example"></div>
    </div>
  </div>

</div>


<button class="btn btn-primary" class="col-md-12">Ubah</button>
@endsection