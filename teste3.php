<html>
<head>
    <title>Upload</title>
</head>
<body>
    <form>
        <input type="file" name="fileimagem" id="fileimagem" />
        <button type="button" id="btn">Enviar</button>
    </form>
    <script type="text/javascript" src="JS/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btn").on('click', function(){

                var data = new FormData();
                data.append('fileimagem', $('#fileimagem')[0].files[0]);

                $.ajax({
                    url: 'teste4.php',
                    data: data,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(data) 
                    {
                        alert(data);
                    }
                });

            });
        });
    </script>
</body>
</html>