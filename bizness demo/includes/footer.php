  
        <script src="js/custom.js"></script>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.mixitup.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/mixitup-multifilter.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

        <script>
            var lo =document.querySelector('#container')
            var mixer = mixitup(lo);
            $('#myList a').on('click', function (e) {
              e.preventDefault()
              $(this).tab('show')
            });
    
        </script>
    </body>
</html>