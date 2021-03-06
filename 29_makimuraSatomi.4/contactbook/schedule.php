
<!DOCTYPE html>
<html>
        <head>
                <meta http-equiv="content-type" content="text/html;charset=UTF-8">
                <link rel="stylesheet" href="css/fullcalendar.min.css" media="all"/>
                <link rel="stylesheet" href="css/style.css" media="all"/>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                <script type="text/javascript" src="js/moment.min.js"></script>
                <script type="text/javascript" src="js/fullcalendar.min.js"></script>
                <script type="text/javascript" src="lang/ja.js"></script>
                <script>
                        // ページ読み込み時の処理
                        $(document).ready(function () {
                        
                                // カレンダーの設定
                                $('#calendar').fullCalendar({
                                        height: 550,
                                        lang: "ja",
                                        selectable: true,
                                        selectHelper: true,
                                        select: function(start, end) {
                                        var title = prompt("予定タイトル:");
                                        var eventData;
                                        if (title) {
                                                eventData = {
                                                        title: title,
                                                        start: start,
                                                        end: end
                                                };
                                                $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                                        }
                                        $('#calendar').fullCalendar('unselect');
                                        },
                                        editable: true,
                                        eventLimit: true, 
                                });
                        });
                </script>
        </head>
        <body>
                <?php
                include'header.php';
                ?>
                <div id='calendar'></div>
        </body>
</html>
