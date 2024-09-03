<?php include('admin.header.php'); ?>
<main id="main">
    <div class="container">
        <h2 class="heading-main mt-4">Add Employee</h2><hr />
        
        <div class="header-ul">
            <nav id="menu-overflow">
            <ul class="desktop-ul" id="employeestabs">
                <!-- Manually set each link -->
                <li><a href="employee_contact_detail.php?empid=1" rel="employeesdivcontainer">Contact 1</a></li>
                <li><a href="employee_Contact_detail.php?empid=2" rel="employeesdivcontainer">Contact 2</a></li>
                <li><a href="employee_Contact_detail.php?empid=3" rel="employeesdivcontainer">Contact 3</a></li>
                <li><a href="employee_personal_detail.php?empid=4" rel="employeesdivcontainer">Personal 4</a></li>
                <li><a href="employee_Personal_detail.php?empid=5" rel="employeesdivcontainer">Personal 5</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <li><a href="employee_Personal_detail.php?empid=6" rel="employeesdivcontainer">Personal 6</a></li>
                <!-- Add more links as needed -->

                <li class="more">
                <span onclick="showOverflow()" class="btnmore"></span>
                <ul id="overflow" class="dropdown-content"></ul>
                </li>
            </ul>
            </nav>
        </div>

        <div id="employeesdivcontainer" style="margin-bottom: 1em; padding: 5px; background: #fff;"></div>
        
    </div>
</main>
<?php include('admin.footer.php'); ?>