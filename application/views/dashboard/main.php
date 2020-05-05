 <!-- Contact Section Heading -->
 <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Participant</h2>
<br>
<!-- Contact Section Form -->
<div class="row">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Join Date</th>
            <th>Point</th>
        </tr>
        <?php
            foreach($participant as $k=>$v) {
        ?>
        <tr>
            <td><?php echo $k+1;?></td>
            <td><?php echo $v['name'];?></td>
            <td><?php echo $v['email'];?></td>
            <td><?php echo $v['phone'];?></td>
            <td><?php echo $v['gender'];?></td>
            <td><?php echo $v['birth_date'];?></td>
            <td><?php echo $v['created_at'];?></td>
            <td><?php echo $v['point'];?></td>
        </tr>
        <?php } ?>
    </table>
</div>
