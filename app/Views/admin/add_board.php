<?php $this->extend('admin/layout/layout.php') ?>

<?php $this->section('content') ?>
<div class="container">
</br>
<h2>게시판 추가</h2>
<div class="jumbotron">
<form method="post">
        <div class="row">
            <div class="container p-3 my-3 border col-6">
                <div class="form-group">
                    <label for="board_code">게시판 코드</label>
                    <input id="board_code" value="" name="boc_code" type="text" style="width: 400px;" class="form-control" placeholder="게시판 코드를 입력해 주세요.">
                </div>
                <div class="form-group">
                    <label for="board_name">게시판 이름</label>
                    <input id="board_name" value="" name="boc_name" type="text" style="width: 400px;" class="form-control" placeholder="게시판 이름을 입력해 주세요.">
                </div>
                <div class="form-group mt-2">
                    <label for="board_skin">게시판 스킨</label>
                    <select class="form-control" style="width: 400px;" name="boc_skin" id="board_skin">
                        <option value="notice1" >공지 게시판</option>
                        <option value="normal1" >일반 게시판</option>
                        <option value="gallery1" >갤러리 게시판</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="board_page">노출 페이지 설정</label>
                    <select class="form-control" style="width: 400px;" name="boc_per_page" id="board_page">
                        <option value="5" >5</option>
                        <option value="10" >10</option>
                        <option value="15" >15</option>
                        <option value="20" >20</option>
                        <option value="3" >3</option>
                        <option value="6" >6</option>
                        <option value="9" >9</option>
                        <option value="12" >12</option>
                    </select>
                </div>
            </div>
            <div class="container p-3 my-3 border col-6">

            </div>
        </div>
        <div style="text-align: center;">
            <input type="submit" class="btn btn-primary" value="저장">
            <a class="btn btn-warning" href="/admin/board">취소</a>
        </div>
    </form>
</div>
</div>
<?php $this->endSection() ?>