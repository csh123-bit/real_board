<?= $this->extend('client/layout/layout.php') ?>

<?= $this->section('content') ?>

    <div class="container">
        글쓰기
    
        <form class="mt-5" action="" method="post">
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th>
                            제목
                        </th>
                        <td>
                            <input class="form-control" name="board_title" type="text" value="">
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            내용
                        </th>
                        <td>
                            <textarea class="form-control" name="board_content" id="" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            <input class="btn btn-success" style="float: right;" type="submit" value="글 작성">
        </form>
       
    </div>


<?= $this->endSection() ?>