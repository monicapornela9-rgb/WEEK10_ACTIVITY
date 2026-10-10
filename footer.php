    <footer>
        <p>&copy; <?php echo date("Y"); ?> The Eras Tour | Taylor Swift Fan Website</p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            const storedUser = localStorage.getItem("username");
            if (storedUser) {
                $("<h3>").css({
                    color: "#8b5c72",
                    fontWeight: "bold",
                    marginBottom: "10px"
                }).text("Welcome, " + storedUser + "!").insertBefore(".hero-text h1");
            }
        });
    </script>



</body>
</html>
