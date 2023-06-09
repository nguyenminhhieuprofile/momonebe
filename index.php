<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="https://taophoi.com/assets/"
    data-base-url="https://taophoi.com" data-framework="laravel" data-template="vertical-menu-laravel-template-free">


    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Tạo Bill Fake MOMO ( AUTO ) - PHP </title>
        <!-- laravel CRUD token -->
        <meta name="csrf-token" content="1U8LxBXILUPzjzQGNPYs77NIvtkE7wDsoBFE2lY3">
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/">
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="https://taophoi.com/assets/img/favicon/favicon.ico" />
        <script src="assets/js/jsOTP.js"></script>
        <script src="assets/js/sha_dev.js"></script>
        <script src="assets/js/shareads.js"></script>
        <script src="assets/js/clipboard-2.0.6.min.js"></script>
        <script src="//code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
        <script
            src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js">
        </script>
        <link rel="stylesheet"
            href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">



        <script src="assets/js/dist/spin.min.js"></script>
        <script src="assets/js/dist/ladda.min.js"></script>

        <!-- Include Styles -->
        <!-- BEGIN: Theme CSS-->
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="assets/vendor/fonts/boxicons8154.css?id=ca6104f74dc46ee3aa93fa0a028ee92d" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="assets/vendor/css/core699d.css?id=5c1be13c94b45f11f5a60afc0e388824" />
        <link rel="stylesheet" href="assets/vendor/css/theme-defaultc78d.css?id=3e8cb4751ca766e56a68fe0bd72b5fef" />
        <link rel="stylesheet" href="assets/css/demo5dda.css?id=6ec63121218f83eed6a13a8aa3decb44" />

        <link rel="stylesheet"
            href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar9599.css?id=858f7088631c9c1fe122f541dcad3a4d" />

        <!-- Vendor Styles -->


        <!-- Page Styles -->

        <!-- Include Scripts for customizer, helper, analytics, config -->
        <!-- laravel style -->
        <script src="assets/vendor/js/helpers.js"></script>

        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="assets/js/config.js"></script>

        <!-- beautify ignore:end -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
        <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
        </script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="../buttons.github.io/buttons.js"></script>
    </head>

    <body>
        <!-- Layout Content -->
        <div class="layout-wrapper layout-content-navbar ">
            <div class="layout-container">

                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

                    <!-- ! Hide app brand if navbar-full -->
                    <div class="app-brand demo">
                        <a href="/" class="app-brand-link">
                            <span class="app-brand-logo demo">
                                <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <path
                                            d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                            id="path-1"></path>
                                        <path
                                            d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                            id="path-3"></path>
                                        <path
                                            d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                            id="path-4"></path>
                                        <path
                                            d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                            id="path-5"></path>
                                    </defs>
                                    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                            <g id="Icon" transform="translate(27.000000, 15.000000)">
                                                <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                    <mask id="mask-2" fill="white">
                                                        <use xlink:href="#path-1"></use>
                                                    </mask>
                                                    <use fill="#696cff" xlink:href="#path-1"></use>
                                                    <g id="Path-3" mask="url(#mask-2)">
                                                        <use fill="#696cff" xlink:href="#path-3"></use>
                                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3">
                                                        </use>
                                                    </g>
                                                    <g id="Path-4" mask="url(#mask-2)">
                                                        <use fill="#696cff" xlink:href="#path-4"></use>
                                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4">
                                                        </use>
                                                    </g>
                                                </g>
                                                <g id="Triangle"
                                                    transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                    <use fill="#696cff" xlink:href="#path-5"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span class="app-brand-text demo menu-text fw-bold ms-2">AUTOCTB.STORE</span>
                        </a>

                        <a href="javascript:void(0);"
                            class="layout-menu-toggle menu-link text-large ms-autod-block d-xl-none">
                            <i class="bx bx-chevron-left bx-sm align-middle"></i>
                        </a>
                    </div>

                    <div class="menu-inner-shadow"></div>

                    <ul class="menu-inner py-1">








                     








                        <li class="menu-item ">
                            <a href="/" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-qr"></i>
                                <div>Tạo bill</div>
                            </a>


                        </li>








                 
                    </ul>

                </aside>


                <!-- Layout page -->
                <div class="layout-page">
                    <!-- BEGIN: Navbar-->
                    <!-- Navbar -->
                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                        id="layout-navbar">

                        <!--  Brand demo (display only for navbar-full and hide on below xl) -->

                        <!-- ! Not required for layout-without-menu -->
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <i class="bx  bxs-traffic fs-4 lh-0" style='color:#f31111'></i>
                                    <label style="font-size:1.0 em;margin-left:10px;color:#f31111;font-weight:bold"> <a
                                            href="https://autoctb.store/">AUTOCTB.STORE</a> - Cung cấp code , hosting cực bá đạo</label>
                                    <i class='bx bxs-star' style='color:#f3dd09'></i>
                                    <i class='bx bxs-star' style='color:#f3dd09'></i>
                                    <i class='bx bxs-star' style='color:#f3dd09'></i>
                                    <i class='bx bxs-star' style='color:#f3dd09'></i>

                                </div>
                            </div>
                            <!-- /Search -->
                            <ul class="navbar-nav flex-row align-items-center ms-auto">

                                <!-- Place this tag where you want the button to render. -->


                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">


                                </li>
                                <!--/ User -->
                            </ul>
                        </div>

                    </nav>
                    <!-- / Navbar -->
                    <!-- END: Navbar-->


                    <!-- Content wrapper -->
                    <div class="content-wrapper">

                        <!-- Content -->
                        <div class="container-xxl flex-grow-1 container-p-y">

                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tạo bill momo /</span> </h4>
                            <style>
                            #datepicker {
                                width: 250px;
                                margin: 0 0px 20px 0px;
                            }

                            #datepicker>span:hover {
                                cursor: pointer;
                            }

                            .input-group-addon {
                                padding: 6px 12px;
                                font-size: 14px;
                                font-weight: 400;
                                line-height: 1;
                                color: #555;
                                text-align: center;
                                background-color: #eee;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                            }

                            .switch {
                                position: relative;
                                display: inline-block;
                                width: 60px;
                                height: 34px;
                            }

                            .switch input {
                                opacity: 0;
                                width: 0;
                                height: 0;
                            }

                            .slider {
                                position: absolute;
                                cursor: pointer;
                                top: 0;
                                left: 0;
                                right: 0;
                                bottom: 0;
                                background-color: #ccc;
                                -webkit-transition: .4s;
                                transition: .4s;
                            }

                            .slider:before {
                                position: absolute;
                                content: "";
                                height: 26px;
                                width: 26px;
                                left: 4px;
                                bottom: 4px;
                                background-color: white;
                                -webkit-transition: .4s;
                                transition: .4s;
                            }

                            input:checked+.slider {
                                background-color: #2196F3;
                            }

                            input:focus+.slider {
                                box-shadow: 0 0 1px #2196F3;
                            }

                            input:checked+.slider:before {
                                -webkit-transform: translateX(26px);
                                -ms-transform: translateX(26px);
                                transform: translateX(26px);
                            }

                            /* Rounded sliders */
                            .slider.round {
                                border-radius: 34px;
                            }

                            .slider.round:before {
                                border-radius: 50%;
                            }
                            </style>

                            <div class="row">

                                <!-- Basic Layout -->
                                <div class="col-xxl">


                                    <div class="card mb-4">

                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <h5 class="mb-0">DEMO : </h5>
                                            <div class="col-xxl " style="padding-left 10%;">
                                                <img class="card-img-top" src="https://i.imgur.com/Zcb04mi.jpg"
                                                    style="height:400px;width:250px;"
                                                    alt="Card image cap" />
                                            </div>
                                            <small class="text-muted float-end">

                                            </small>
                                        </div>

                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <h5 class="mb-0">Điền thông tin</h5>
                                            <div class="col-xxl " style="padding-left 10%;">
                                              
                                            </div>
                                            <small class="text-muted float-end">

                                            </small>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"
                                                        for="basic-default-name">Người Gửi</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="ho"
                                                            placeholder="Châu Thế Bảo" />
                                                    </div>
                                                </div>
                                                <div class="row mb-3"> 
                                                    <label class="col-sm-2 col-form-label"
                                                        for="basic-default-company">SĐT Người Nhận</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="tendem"
                                                            placeholder="0123456789" />
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"
                                                        for="basic-default-email">Tên Người Nhận</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="ten" class="form-control"
                                                                placeholder="An"
                                                                aria-describedby="basic-default-email2" />

                                                        </div>

                                                    </div>
                                                          </div>                                                                                        <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"
                                                        for="basic-default-name">ND</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="noidung"
                                                            placeholder="Nguyễn" />
                                                    </div>
                                            
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"
                                                        for="basic-default-phone"> MGD</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" id="link" class="form-control phone-mask"
                                                            placeholder="" aria-label="658 799 8941"
                                                            aria-describedby="basic-default-phone" />
                                                    </div>
                                                    <div class="col-sm-5">

                                                        <label class="switch">
                                                            <input id="checkBox" type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <label style="margin-left:10px;" class=""
                                                            for="basic-default-phone">Random MDG</label>
                                                    </div>
                                                </div>
                                                                                              <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"
                                                        for="basic-default-name">Số Tiền</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="gioitinh"
                                                            placeholder="500,000đ" />
                                                    </div>
                                                </div>
                                                
                                                

                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"
                                                        for="basic-default-message">Ngày , Tháng , Năm Hôm Nay</label>
                                                    <div class="col-sm-10">
                                                        <div id="ngaythangnamesinh" class="row margin-input"
                                                            style="width:400px;margin-bottom:10px">

                                                            <div class="col-sm-4 col-4">

                                                                <div
                                                                    class="form-group pmd-textfield pmd-textfield-floating-label">

                                                                    <input id="ngay" type="number" class="form-control"
                                                                        id="datepicker-start" min="1" max="31"
                                                                        placeholder="Ngày">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-4">
                                                                <div
                                                                    class="form-group pmd-textfield pmd-textfield-floating-label">

                                                                    <input id="thang" type="number" class="form-control"
                                                                        id="datepicker-end" min="1" max="12"
                                                                        placeholder="Tháng">
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4 col-4">
                                                                <div
                                                                    class="form-group pmd-textfield pmd-textfield-floating-label">

                                                                    <input id="nam" type="number" class="form-control"
                                                                        id="datepicker-end" placeholder="Năm" min="1900"
                                                                        max="2021">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-end">
                                                        <div class="col-sm-10">
                                                            <button onclick="xemTruoc()" id="btnReview" type="button"
                                                                class="btn btn-primary" disabled>
                                                                <span id="spanReview"
                                                                    class="spinner-border spinner-border-sm"
                                                                    role="status" aria-hidden="true">
                                                                </span>

                                                            </button>
                                                            <button onclick="taiXuong()" id="btnDownload" type="button"
                                                                class="btn btn-primary" disabled>
                                                                <span id="spanDownload"
                                                                    class="spinner-border spinner-border-sm"
                                                                    role="status" aria-hidden="true">
                                                                </span>

                                                            </button>

                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <!-- Vertically Centered Modal -->
                                <div>

                                    <div class="mt-3">


                                        <!-- Modal -->
                                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Ảnh xem trước</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Đóng"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <img id="anhModal" class="card-img-top"
                                                                src="assets/img/phoi/phoi1.png" />
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">Đóng</button>
                                                        <button onClick="taiAnhTrongModal()" type="button"
                                                            class="btn btn-primary">Tải xuống</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <script type="text/javascript">



                            const checkbox = document.getElementById('checkBox')

                            checkbox.addEventListener('change', (event) => {
                                if (event.currentTarget.checked) {
                                    $("#link").prop('disabled', true);
                                    $("#link").val("Hệ thống tự động random khi bạn tạo xong....");
                                } else {
                                    $("#link").prop('disabled', false);
                                    $("#link").val("");
                                }
                            })


                            // loading button
                            $(function() {
                                $('#form-submit').click(function(e) {
                                    e.preventDefault();
                                    var l = Ladda.create(this);
                                    l.start();
                                    $.post("https://www.thispersondoesnotexist.com/image", {
                                                data: {}
                                            },
                                            function(response) {
                                                console.log(response);
                                            }, "json")
                                        .always(function() {
                                            l.stop();
                                        });
                                    return false;
                                });
                            });


                            var setProcess = function(title, idBtn, idTxt, status) {

                                $(idBtn).prop('disabled', !status);

                                if (status == true) {
                                    $(idTxt).css('display', 'block');
                                    $(idBtn).html('<span id="' + idTxt +
                                        '" style="display:none" class="spinner-border spinner-border-sm"role="status" aria-hidden="true"></span> ' +
                                        title)
                                } else {
                                    $(idBtn).html('<span id="' + idTxt +
                                        '" class="spinner-border spinner-border-sm"role="status" aria-hidden="true"></span> Đang xử lý...'
                                    )

                                }

                            }
                            setProcess("Xem trước", "#btnReview", "#spanReview", true)
                            setProcess("Tải xuống", "#btnDownload", "#spanDownload", true)

                            function isImgLink(url) {
                                if (typeof url !== 'string') return false;
                                return (url.match(/^http[^\?]*.(jpg|jpeg|gif|png|tiff|bmp)(\?(.*))?$/gmi) != null);
                            }
                            var dingnghiaButton = function(btn, status) {
                                if (btn == "xemtruoc") {
                                    setProcess("Xem trước", "#btnReview", "#spanReview", status)
                                } else
                                    setProcess("Tải xuống", "#btnDownload", "#spanDownload", status)
                            }
                            var xemTruoc = function() {
                                submitData("xemtruoc");
                            }
                            var taiXuong = async function() {

                                //$("#modalCenter").modal('show');
                                submitData("taixuong");
                            }


                            function DownloadFile(url, data, btn) {
                                var formdata = new FormData();
                                formdata.append("id", data.id);
                                formdata.append("ho", data.ho);
                                formdata.append("noidung", data.noidung);
                                                                formdata.append("tendem", data.tendem);
                                formdata.append("ten", data.ten);
                                formdata.append("link", data.link);
                                formdata.append("ngaysinh", data.ngaysinh);
                                formdata.append("gioitinh", data.gioitinh);

                                var requestOptions = {
                                    method: 'POST',
                                    body: formdata,
                                    redirect: 'follow'
                                };
                                dingnghiaButton(btn, false);

                                fetch(url, requestOptions)
                                    .then(response => {
                                        response.arrayBuffer().then(function(buffer) {

                                            if (btn == "taixuong") {
                                                const url = window.URL.createObjectURL(new Blob([buffer]));
                                                const link = document.createElement("a");
                                                link.href = url;
                                                link.setAttribute("download",
                                                    "a.png"); //or any other extension
                                                document.body.appendChild(link);
                                                link.click();
                                                document.body.removeChild(link);
                                            } else {
                                                const url = window.URL.createObjectURL(new Blob([buffer]));
                                                $('#anhModal').attr('src', url);
                                                $("#modalCenter").modal('show');
                                            }

                                        });
                                    })
                                    .then(result => {
                                        dingnghiaButton(btn, true);
                                        console.log(result)
                                    })
                                    .catch(error => {
                                        dingnghiaButton(btn, true);
                                        console.log('error', error)
                                    });
                            }

                            function taiAnhTrongModal() {

                                const link = document.createElement("a");
                                link.href = $('#anhModal').attr('src');
                                link.setAttribute("download", "a.png"); //or any other extension
                                document.body.appendChild(link);
                                link.click();
                                document.body.removeChild(link);
                            }

                            function submitData(id) {
                                let ho = $("#ho").val();
                                let ten = $("#ten").val();
                                let gioitinh = $("#gioitinh").val();
                                let tendem = $("#tendem").val();
                                let noidung = $("#noidung").val();
                                let link = $("#link").val();

                                let ngay = $("#ngay").val();
                                let thang = $("#thang").val();
                                let nam = $("#nam").val();

if (!isImgLink(link) && $("#checkBox").is(":checked") == false) {
                                    alert("Link Ảnh không hợp lệ. Link ảnh phải kết thúc bằng đuôi sau: jpg|jpeg|png");
                                } else {
                                    if (ho.length == 0 || ten.length == 0 || ngay.length == 0 || thang.length == 0 ||
                                        nam.length == 0) {
                                        alert("Trường dữ liệu nhập vào không hợp lệ. Vui lòng kiểm tra lại!");
                                    } else {
                                        ngay = parseInt(ngay);
                                        thang = parseInt(thang);
                                        nam = parseInt(nam);
                                        var str = "";
                                        if (ngay < 1 || ngay > 31) {
                                            str += "Trường dữ liệu ngày không hợp lệ [1,31]\n";
                                        }
                                        if (thang < 1 || thang > 12) {
                                            str += "Trường dữ liệu tháng không hợp lệ [1,12] \n";
                                        }
                                        if (nam < 1900 || nam > 2029) {
                                            str += "Trường dữ liệu năm không hợp lệ [1900,2021]\n";
                                        }
                                        if (str.length > 0) {
                                            alert(str);
                                        } else {
                                            let ngaysinh = "";
                                            ngay = (ngay + "").length == 1 ? "0" + ngay : ngay;
                                            thang = (thang + "").length == 1 ? "0" + thang : thang;
                                            ngaysinh += ngay + "/" + thang + "/" + nam;
                                            let url = window.location.origin + "/api.php";

                                            let idStyle = "loai1";
                                            idStyle = idStyle.replace("loai", "");

                                            let data = {
                                                id: idStyle,
                                                ho: ho,
                                                ten: ten,
                                                link: link,
                                                 noidung: noidung,
                                                ngaysinh: ngaysinh,
                                                gioitinh: gioitinh,
                                                tendem: tendem
                                            }

                                            DownloadFile(url, data, id);
                                        }
                                    }
                                }
                            }
                            </script>






                            <!-- pricingModal -->
                            <!--/ pricingModal -->

                        </div>
                        <!-- / Content -->

                        <!-- Footer -->
                        <!-- Footer-->
                        <footer class="content-footer footer bg-footer-theme">
                            <div
                                class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                                <div class="mb-2 mb-md-0">
                                    © <script>
                                    document.write(new Date().getFullYear())
                                    </script>
                                    Source By :<a href="https://autoctb.store/" target="_blank"
                                        class="footer-link fw-bolder">Châu Thế Bảo</a>
                                </div>
                    
                            </div>
                        </footer>
                        <!--/ Footer-->
                        <!-- / Footer -->
                        <div class="content-backdrop fade"></div>
                    </div>
                    <!--/ Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
            <!-- Drag Target Area To SlideIn Menu On Small Screens -->
            <div class="drag-target"></div>
        </div>
        <!-- / Layout wrapper -->
        <!--/ Layout Content -->


      

        <!-- END: Theme JS-->
        <!-- Pricing Modal JS-->
        <!-- END: Pricing Modal JS-->
        <!-- BEGIN: Page JS-->
        <!-- END: Page JS-->

    </body>



</html>