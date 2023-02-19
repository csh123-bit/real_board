<?php $this->extend('admin/layout/layout.php') ?>

<?php $this->section('content') ?>
<div class="container">
</br>
  <h2>게시판 관리</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>게시판 이름</th>
        <th>생성일자</th>
        <th>바로가기</th>
        <th>수정</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($boardConfigData as $key=>$val){ ?>
        <tr>
          <td><?php echo $val['boc_name'] ?></td>
          <td><?php echo $val['boc_created_at'] ?></td>
          <td><a>바로가기</a></td>
          <td><a href="/admin/board/add_board/<?php echo $val['boc_idx'] ?>">수정</a></td>
        </tr>
      <?php }?>
    </tbody>
  </table>
  <a class="btn btn-success" href="/admin/board/add_board">게시판 추가</a>
</div>
<?php $this->endSection() ?>