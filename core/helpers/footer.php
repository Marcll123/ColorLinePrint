<!--Scrips para la funcionalidad de boostrap y el el menu principal el primero es la version min
de jquery que necesita boostrap y su popper-->
<script src="../../resources/js/jquery-3.3.1.slim.min.js"></script>
<script src="../../resources/js/popper.min.js"></script>
<script src="../../resources/js/bootstrap.min.js"></script>

<script src="../../resources/js/all.min.js"></script>
<script src="../../resources/js/Chart.min.js"></script>
<script src="../../resources/js/graficos.js"></script>
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
</body>

</html>