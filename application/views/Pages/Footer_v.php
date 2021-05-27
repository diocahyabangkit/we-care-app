                <!-- Footer -->
                <footer class="footer">
                    <div class="footer-block buttons">
                    <!-- Icons Sosmed -->
                        <!-- <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe> -->
                    </div>
                    <div class="footer-block author">
                        <ul>
                            <li> created by <a href="#">We-Care</a> 2021
                            </li>
                        </ul>
                    </div>
                </footer>

        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="<?= base_url('Assets/modular-admin/dist/')?>js/vendor.js"></script>
        <script src="<?= base_url('Assets/modular-admin/dist/')?>js/app.js"></script>

        
        <!-- Data Tables -->
        <script>
            $(document).ready(function() {
                $('#table-pengaduan').DataTable();
            } );

            $(document).ready(function(){
                $('#table-users-app').DataTable();
            });

        </script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/fh-3.1.8/sl-1.3.3/datatables.min.js"></script>

        <!-- Data Tables -->
    </body>
</html>