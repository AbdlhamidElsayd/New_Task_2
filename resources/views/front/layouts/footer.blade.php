<footer class="bg6 p-t-35 p-b-35 p-l-45 p-r-45">
        <div class="container">
            <div class="row p-b-90">
                <div class="col-md-12 text-center">

                </div>
                <div class="col-md-3  col-sm-6 p-t-20 p-l-15 p-r-15 respon3">
                    <h4 class="s-text12 p-b-30"> CONNECT WITH US</h4>
                    <div>
                        <ul class="social-icons top-i icon-circle icon-rotate list-unstyled list-inline">

                            <li> <a href="" target="_blank"> <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span class="footer-icon"> 1-800-934-1571 </span>
                                </a>
                            </li>
                            <li> <a href="" target="_blank"><i class="fa fa-facebook fa-top"></i>
                                    <span class="footer-icon">facebook </span>
                                </a>
                            </li>
                            <li> <a href="#">
                                    <i class="fa fa-twitter fa-top" target="_blank"></i>
                                    <span class="footer-icon">twitter </span>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="col-md-3  col-sm-6 p-t-20 p-l-15 p-r-15 respon4">
                    <h4 class="s-text12 p-b-30"> COMPANY</h4>
                    <ul>
                        <li class="p-b-9"> <a href="hwo-to-buy.html" class="s-text7">about us</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-6 p-t-20 p-l-15 p-r-15 respon4">
                    <h4 class="s-text12 p-b-30"> GET HELP</h4>
                    <ul>
                        <li class="p-b-9"> <a href="Order.html" class="s-text7"> Your Orders </a></li>
                        <li class="p-b-9"> <a href="contact.html" class="s-text7"> Contact Us </a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 p-t-20 p-l-15 p-r-15 respon4">
                    <h4 class="s-text12 p-b-30"> SHARE YOUR IDEAS</h4>
                    <p class="s-text7"> We love hearing from you. Send ideas and comments to </p>
                    <a href="#" class=" s-text7 get-contact">Click here.</a>
                </div>

            </div>
        </div>
    </footer>



    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </span>
    </div>


    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('front/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('front/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('front/vendor/bootstrap/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="{{ asset('front/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('front/bootstrap-toastr/toastr.min.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function()
        {
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            toastr['error']("{{ $error }}")
            @endforeach
            @endif
            @if(session('status', '') == 'success')
            toastr['success']("{{ session('message', '') }}")
            @elseif(session('status', '') == 'error')
            toastr['error']("{{ session('message', '') }}")
            @endif 
        })
    </script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });
    </script>
    <!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="{{ asset('front/js/map-custom.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('front/js/main.js') }}"></script>
    <script>
        $('.select2').select2()
            .on("select2:open", function() {
                $('.select2-results__options').niceScroll({
                    cursorcolor: "#5fdfe8",
                    cursorwidth: "8px",
                    autohidemode: false,
                    cursorborder: "1px solid #5fdfe8",
                    horizrailenabled: false,
                });
            });
    </script>
    <script>
        $(document).ready(function() {
            function alignModal() {
                var modalDialog = $(this).find(".modal-dialog");

                // Applying the top margin on modal dialog to align it vertically center
                modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
            }
            // Align modal when it is displayed
            $(".modal").on("shown.bs.modal", alignModal);


        });
    </script>
    <script>
        //Call Us
        $(document).ready(function() {
            setTimeout(function() {
                $('#callModal').modal('show');
                $('body').css('padding-right', '0px');
            }, 100000);
        });
    </script>
    @yield('js')
</body>

</html>