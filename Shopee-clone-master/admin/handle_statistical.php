<div id="statistical-title">
    <h2>BEST - SELLING PRODUCT</h2><span>Changed</span>
</div>
<!-- Start by adding a <div> to your page that will contain your chart. Make sure it has an ID so you can refer to it in your Javascript later. -->
<div id="myfirstchart" style="height: 250px;"></div>

<?php
require_once('./../dbhelper.php');
$sqlSelling = 'SELECT MASP, SLUONG FROM chitiethd ORDER BY SLUONG DESC LIMIT 10';
$bestSellingProducts = executeResult($sqlSelling);
$chartData = '';

foreach ($bestSellingProducts as $selling) {
    $chartData .= "{ idproduct: '" . $selling['MASP'] . "', amount: " . $selling['SLUONG'] . " }, ";
}

$chartData = substr($chartData, 0, -2); // Xóa dấu cách và dấu phẩy ở cuối

?>

<!------------------------------ morris chart cdn ------------------------------>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script type="text/javascript">
    new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'myfirstchart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            <?php echo $chartData; ?>
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'idproduct',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['amount'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Amount'],
        hideHover: 'auto',
        stacked: true,
        parseTime: false,
        lineColors: ['Skyblue', 'Pink']
    });
</script>


<div id="content-area_admin">
    <h2>Statistical manager</h2>
    <div id="statistital__container">
        <div class="statistital__container-select">
            <div class="select-sta">
                <select name="selectRole" id="selectRole" style=" height:34px; padding-top: 6px; padding-bottom: 6px; padding-left: 12px; padding-right: 12px;">
                    <option selected disabled>Choose statistical</option>
                    <option value="staff">Staff</option>
                    <option value="customer">Customer</option>
                </select>
            </div>
            <div class="select-date">
                <div class="from-date">
                    <span class="label-date">From date</span><input type="date" name="from_date" id="from_date" class="form-control" />
                </div>
                <div class="to-date">
                    <span class="label-date">To date</span><input type="date" name="to_date" id="to_date" class="form-control" />
                </div>
                <div class="btn-filter">
                    <input type="button" name="filter" id="filter" value="Filter" />
                </div>
            </div>
        </div>
    </div>
    <div id="content-list-admin">
        <div class="react__list-statistical">
            <div class="product-header__admin">
                <h5 class="statistical-idbill">ID BILL</h5>
                <h5 class="statistical-name">NAME STAFF</h5>
                <h5 class="statistical-sdt">PHONE</h5>
                <h5 class="statistical-total">TOTAL BILL</h5>
                <h5 class="statistical-date">DATE</h5>
            </div>
            <div class="render__statistical">
                <?php
                $sql = 'SELECT * FROM hoadon, nhanvien WHERE hoadon.MANV = nhanvien.MANV';
                require_once('./../dbhelper.php');
                $render = executeResult($sql);

                foreach ($render as $r) {
                    echo '            
                    <div class="product-list__admin">
                        <p class="statistical-idbill">' . $r['MAHD'] . '</p>
                        <p class="statistical-name">' . $r['HONV'] . " " . $r['TENNV'] . '</p>
                        <p class="statistical-sdt">' . $r['SDT'] . '</p>
                        <p class="statistical-total">' . $r['TONGTIEN'] . '</p>
                        <p class="statistical-date">' . $r['NGAYHD'] . '</p>
                    </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Ajax -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Morris -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<!-- Ajax jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jQuery UI -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(document).ready(function() {
        $.datepicker.setDefaults({
            dateFormat: 'yy-mm-dd'
        });
        $(function() {
            $("#from_date").datepicker();
            $("#to_date").datepicker();
        });
        $('#filter').click(function() {
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            var chooseSta = $('#selectRole').val();
            console.log('From date: ', from_date, ' To date: ', to_date, ' Choose: ', chooseSta);
            if (from_date != '' && to_date != '') {
                $.ajax({
                    url: "filter.php",
                    method: "POST",
                    data: {
                        from_date: from_date,
                        to_date: to_date,
                        chooseSta: chooseSta
                    },
                    success: function(data) {
                        $('.render__statistical').html(data);
                        console.log('Data statistical: ', data);
                    }
                });
            } else {
                alert("Please Select Date");
            }
        });
    });

    $(document).ready(function() {
        $('#statistical-title span').click(function() {
            var contentChanged = $('#statistical-title h2').text();
            var displayChanged = $('#statistical-title h2');
            console.log(contentChanged);
            $('#myfirstchart').html("");
            $.ajax({
                url: "chart.php",
                method: "POST",
                data: {
                    textContent: contentChanged
                },
                dataType: "json",
                success: function(result) {
                    console.log(result.type);
                    Morris.Bar({
                        // ID of the element in which to draw the chart.
                        element: 'myfirstchart',
                        // Chart data records -- each entry in this array corresponds to a point on
                        // the chart.
                        data: result.chart,
                        // The name of the data record attribute that contains x-values.
                        xkey: 'month',
                        // A list of names of data record attributes that contain y-values.
                        ykeys: ['total'],
                        // Labels for the ykeys -- will be displayed when you hover over the
                        // chart.
                        labels: ['Total'],
                        hideHover: 'auto',
                        stacked: true,
                        lineWidth: '6px',
                        parseTime: false,
                        lineColors: ['Skyblue', 'Pink']
                    });
                    displayChanged.text(result.message);
                }
            });
        })
    });
</script>