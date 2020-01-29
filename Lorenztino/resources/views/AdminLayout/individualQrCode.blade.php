<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview QR Code</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=DM+Serif+Text&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/fa/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

    <style>
        
    </style>
</head>
<body>

<?php
    echo "<div class='box' box-id='".$id."' id='box-id'>";
    echo "<span class='avenir-next-b' style='color: brown;'>The Wedding of <br> Lorenztino & Sonia</span><br>";
    echo "<span class='avenir-next-m' style='letter-spacing: 2px; color: brown;'>FEB.01.2020</span>";
    echo "<img style='margin: 0 auto; margin-top:8px; margin-bottom: 8px;' src='https://api.qrserver.com/v1/create-qr-code/?data=".$id."&amp;size=100x100' alt='' title='' />";
        //echo "<div style='margin: 0 auto; margin-top:8px; margin-bottom: 8px; background-image: url("."'https://api.qrserver.com/v1/create-qr-code/?data=".$value->id."&amp;size=100x100'".")'></div>";
    echo "<br><span class='avenir-next-b' style='color: brown; font-size: 8pt;'>QR CODE DIBAWA UNTUK TANDA MASUK</span>";
    echo "<p class='avenir-next-m' style='margin-bottom: 0; letter-spacing: 2px; margin-top: 5px; font-size: 9pt;background-color: brown; color: white;'>For ".$kuota." Person</p>";
    echo "<span class='avenir-next-b' id='contNama' nama=".$nama." style='color: brown; font-size: 9pt;'>".$nama."</span>";
    echo "</div>";
?>
    <script>
        let index = parseInt($("#box-id").attr('box-id'));
            let nama = $("#contNama").attr("nama");
            
            html2canvas($(`#box-id`).get(0), {useCORS : true}).then(canvas => {
                // $("#containerSS").append(canvas);
                var data = canvas.toDataURL();

                var link = document.createElement('a');
                link.download = `card_${nama}_${index}.png`;
                link.href = data;

                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
        $(document).ready(function(){
            

        });
    </script>

    <!-- <script>

        $(document).ready(function(){
            // var element = $("#box-1")[0]; // global variable
            // var getCanvas = document.createElement("canvas"); // global variable
            // $("#generateAll").click(function(){
            //     html2canvas(element, {
            //         onrendered: function (canvas) {
            //                 $("#previewImage").append(canvas);
            //                 getCanvas = canvas;
            //             }
            //         });

            //     var imgageData = getCanvas.toDataURL("image/png");
            //     // Now browser starts downloading it instead of just showing it
            //     var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
            //     $("#generateAll").attr("download", "test.png").attr("href", newData);
            // });

            $("#generateAll").click(function(){
                $.ajax({
                    url: "/Burger123/generateIndividualQR",
                    method: "get",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": 20
                    },
                    success: function(res){
                        console.log(res);
                    }
                })
                //newGenImage();
            });
        });

        

        function newGenImage()
        {
            var tamus = [];

            $.ajax({
                    method: "post",
                    url: '/Burger123/getAll',
                    data: {
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(res){
                        datas = JSON.parse(res);
                        datas.forEach(data => {
                            tamus.push(data);
                        });

                        //console.log(tamus[0]['nama']);

                        var index = 1;

                    function next()
                    {
                        //console.log("yes");
                        if(index >= tamus.length) return;

                        html2canvas($(`#box-${index}`).get(0)).then(canvas => {
                            // $("#containerSS").append(canvas);
                            var data = canvas.toDataURL();
                            
                            var link = document.createElement('a');
                            link.download = `card_${tamus[index-1]["nama"]}_${index-1}.png`;
                            link.href = data;

                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                            
                            index++;
                            //console.log(link);
                            next();
                        });
                    }

                    next();
                    }
                });
        }
    </script> -->

</body>
</html>