<div style="width:100%; height:87%; margin:auto; overflow:auto; ">
    <p class="t cent botli">學習經歷管理</p>
    <!-- 因為這裡被include到 admin.php 所以是從admin.php的位置去找尋 -->
    <form method="post" action="api/edit.php">
        <table class="table text-center bek">
            <thead>
                <tr>
                    <th scope="col">學校名稱</th>
                    <th scope="col">系所名稱</th>
                    <th scope="col">就讀日期</th>
                    <th scope="col">說明</th>
                    <th scope="col">顯示</th>
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
                    <th scope="row"><input type="text" class="form-control" style="font-size:15px; padding:1px 0" name="edu_name[]" size="30" value="<?=$row['edu_name'];?>"></th>
                    <td><input class="form-control" type="text" style="font-size:15px; padding:1px 0" name="edu_dept[]" size="25" value="<?=$row['edu_dept'];?>"></td>
                    <td><input class="form-control" type="text" style="font-size:15px; padding:1px 0" name="edu_date[]" size="13" value="<?=$row['edu_date'];?>"></td>
                    <td><textarea class="form-control" name="edu_con[]" style='width:90%;height:60px'><?=$row['edu_con'];?></textarea></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=$isChk;?>></td>
                    <td><input type="checkbox" name="del[]" size="2" value="<?=$row['id'];?>">刪除</td>
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
            <button type="button" class="float-right mr-5 btn btn-outline-danger" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/res_edu_exp.php?table=<?=$table;?>&#39;)">新增學歷項目</button>
        </div>
    </form>
</div>