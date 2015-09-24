                            </div>
                        <!--end: Dynamic Content-->

                    </div>
                <!--end: Content Container-->
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#table_id').dataTable();
                var pagetag = $('meta[name=pagetag]').attr("content");
                $("a[data-nav='" + pagetag + "']").addClass('active');
            });
        </script>

        <!--<script type="text/javascript">

            toastr.options = {
              "closeButton": false,
              "debug": true,
              "positionClass": "toast-top-full-width",
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
            }

            
        </script>-->

    </body>
</html>