
<?php $this->extend('client/layout/layout.php') ?>

<?php $this->section('content') ?>
</br>
<div class="container mb-5">
    <div class="container">
        <h2><?php echo $boardConfig['boc_name'] ?></h2>
        <table class="table table-hover">
            <thead>
            <tr style="text-align:center;">
                <th>작성자</th>
                <th>제목</th>
                <th>작성일</th>
            </tr>
            </thead>
            <tbody>
                <?php if(count($boardData)>0){ ?>
                    <?php foreach($boardData as $key=>$val){ ?>
                    <tr>
                        <td style="width:15%;"><?php echo $val['bod_username'] ?></td>
                        <td style="width:60%"><a href="/board/board/<?php echo $val['bod_code'] ?>/read/<?php echo $val['bod_idx'] ?>"><?php echo $val['bod_title'] ?></a></td>
                        <td><?php echo $val['bod_created_at'] ?></td>
                    </tr>
                    <?php } ?>
                <?php }else{ ?>
                <tr>
                    <td colspan="3">작성된 글이 없습니다.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="container">
            <ul class="pagination" style="justify-content: center;">
                <li class="page-item"><a class="page-link" href="#" >Previous</a></li>
                <li class="page-item"><a class="page-link" href="#" >1</a></li>
                <li class="page-item"><a class="page-link" href="#" >Next</a></li>
            </ul>
        </div>
        <div class="input-group">
            <form method="get" style="display:flex;">
                <select class="form-control" name="search_cond" style="flex: 1;" id="search-cond">
                    <option value="writer">작성자</option>
                    <option value="title">제목</option>
                    <option value="content">내용</option>
                </select>
                <input class="form-control" name="search_word" style="flex: 1; width:210px" type="text" placeholder="검색어를 입력해 주세요.">
                <button class="btn btn-primary" style="flex: 1; width:100px;">검색</button>
            </form>
        </div>
        <div style="float: right;">
            <a class="btn btn-success" href="/board/write/<?php echo $boardConfig['boc_code'] ?>">글 작성</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>