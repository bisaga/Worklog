<html>
<?php $this->import('head.html.php') ?>
<body>
<?php $this->import('navigate.html.php') ?>

<div class="container">
    <div id="dateBar" class="dateBar">
        <table style="width:100%" class="dateBar">
            <tr>
                <td>Workday</td>
                <td><div id="dateTitle" style="text-align: right"><? echo $selectedDate ?></div></td>
            </tr>
        </table>
    </div>
    <div id="formDay" style="width:100%;" class="workdayForm">
        <div style="padding: 0px;">
            <table>
                <tr>
                    <td>
                        <div class="workdayForm label">Date</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="workdayForm input"> <input name="selectedDate" style="width: 105px"> </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <table>
                                <tr>
                                    <td>
                                        <div class="workdayForm label">Arrive</div>
                                    </td>
                                    <td>
                                        <div class="workdayForm label">Leave</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="workdayForm input"> <input name="startTime" style="width: 50px"></div>
                                    </td>
                                    <td>
                                        <div class="workdayForm input"> <input name="endTime" style="width: 50px"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="gridDay" style="width:100%; height:250px;"></div>

</div>

<?php $this->import('script.html.php') ?>
<script type="text/javascript" src="js/view/workday.js"></script>
</body>
</html>

