<div style="width:100%; height:87%; margin:auto; overflow:auto; ">
    <p class="t cent botli">作品集管理</p>
    <!-- 因為這裡被include到 admin.php 所以是從admin.php的位置去找尋 -->
    <form method="post" action="api/edit.php">
        <table class="table text-center bek">
            <thead>
                <tr>
                    <th scope="col">作品照片</th>
                    <th scope="col">作品標題</th>
                    <th scope="col">作品說明</th>
                    <th scope="col">作品分類</th>
                    <th scope="col">作品網址</th>
                    <th scope="col" >顯示</th>
                    <th scope="col" colspan="2">操作</th>
                </tr>
            </thead>
            <?php
                    $table=$do;
                    $db=new DB($table);
                    // 撈出所有資料
                    $rows=$db->all();
                    // 用迴圈撈各筆
                    foreach($rows as $row){
                        $isChk=($row['sh']==1)?'checked':'';
                ?>
            
            <tbody>
                <tr>
                    <th scope="row"><img src='pic/<?=$row['img'];?>' style="width:100px;height:70px"></th>
                    <td><input class="form-control" type="text" size="3" name="title[]" size="5" value="<?=$row['title'];?>"></td>
                    <td><textarea class="form-control" name="point[]"  style='width:100%;height:80px'><?=$row['point'];?></textarea></td>
                    <td>
                        <?php
                            $selectjs=($row['type']=="JavaScript")?"selected":"";
                            $selectphp=($row['type']=="PHP")?"selected":"";
                            $selectother=($row['type']=="Others")?"selected":"";
                        ?>
                        <select name="type[]"  class="form-control">
                          <option name="JavaScript" value="JavaScript" <?=$selectjs;?>>JavaScript</option>
                          <option name="PHP" value="PHP" <?=$selectphp;?>>PHP</option>
                          <option name="Others" value="Others" <?=$selectother;?>>Others</option>
                        </select>
                    </td>
                    <td><input class="form-control" type="text" size="3" name="url[]" size="5" value="<?=$row['url'];?>"></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$isChk;?>></td>
                    <td><input type="checkbox" name="del[]" size="2" value="<?=$row['id'];?>">刪除</td>
                    <td><input class="btn btn-outline-warning" type="button" size="2"
                        onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/upload_img.php?id=<?=$row['id'];?>&table=<?=$table;?>&#39;)"
                        value="更新"></td>
                    <input type="hidden" name="table" value="<?=$table;?>">
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
            <?php
                }
                ?>
            </tbody>
        </table>
        
        <div class="container mt-5 ">
            <input class="float-right ml-3 btn btn-outline-info" type="submit" value="修改確定">
            <input class="float-right ml-5 btn btn-outline-info" type="reset" value="重置">
            <button type="button" class="float-right mr-5 btn btn-outline-danger" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/res_portfolio.php?table=<?=$table;?>&#39;)">新增作品集</button>
        </div>
    </form>
</div>