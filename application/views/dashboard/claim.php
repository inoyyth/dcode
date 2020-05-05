 <!-- Contact Section Heading -->
 <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Claim Request</h2>
 <br>
<!-- Contact Section Form -->
<div class="row">
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Claim Date</th>
        </tr>
        <?php
            foreach($claim as $k=>$v) {
        ?>
        <tr>
            <td><?php echo $v['name'];?></td>
            <td><?php echo $v['email'];?></td>
            <td><?php echo $v['phone'];?></td>
            <td><?php echo $v['gender'] == 'P' ? 'Pria' : 'Wanita';?></td>
            <td><?php echo $v['create_date'];?></td>
        </tr>
        <?php } ?>
    </table>
</div>
