<?php
/**
 * Created by PhpStorm.
 * User: tienmanh2208
 * Date: 16/01/2019
 * Time: 11:14
 */
?>

<?php 
    $contentData = file_get_contents('./../data/post.json');
    $contentPost = json_decode($contentData);
    $listSv = array(); $listTh = array();

    for($i = 0; $i < count($contentPost); ++$i){
        if($contentPost[$i]->category == "Soạn văn") {
            $sv++;
            array_push($listSv, $i);
        }
        else if($contentPost[$i]->category == "Toán học") {
            array_push($listTh, $i);
        }
    }
?>

<div class="grade-content">
    <div class="grade-news" id="sv">
        <div class="mainpage-news-title">
            <div class="news-title">Soạn văn</div>
            <div class="news-viewall">Xem tất cả<i class="fas fa-caret-right" style="margin-left: 4px;"></i>
            </div>
            <div class="above_"></div>
            <div class="_"></div>
        </div>
        <div class="mainpage-news-content" id="sv-grade-news-content">
            <?php
                $check = false;
                for($i = 0; $i < count($listSv); ++$i){
                    if(($i == 5) && ($listSv > 6)) { echo '<div class="grade-post blur-content">'; $check = true; }
                    else echo '<div class="grade-post">';

                    echo '
                        <div class="post-title">'.$contentPost[$listSv[$i]]->title.'</div>
                        <div class="post-author">'.$contentPost[$listSv[$i]]->author.'</div>
                        <div class="post-statistic">
                            <div class="post-like"><i class="fas fa-heart" style="color: #e06666; margin-right: 6px;"></i>'.$contentPost[$listSv[$i]]->likes.'</div>
                            <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>'.$contentPost[$listSv[$i]]->views.'</div>
                        </div>
                        <div class="post-content">'.$contentPost[$listSv[$i]]->content->content.'</div>
                        </div>';

                    if($check) break;
                }
            ?>
        </div>
        <div class="grade-shadow"></div>
        <div class="flex-row-nowrap">
            <button class="grade-btn" style="margin-bottom: 15px;" id="expand-sv">Xem thêm</button>
            <div class="preload-icon" id="preload-icon"></div>
            <div class="grade-circle grade-circle-active">1</div>
            <div class="grade-circle">2</div>
            <div class="grade-circle">3</div>
            <div class="grade-circle">4</div>
        </div>
    </div>
    <div class="grade-news" id="th">
        <div class="mainpage-news-title">
            <div class="news-title">Toán học</div>
            <div class="news-viewall">Xem tất cả<i class="fas fa-caret-right" style="margin-left: 4px;"></i>
            </div>
            <div class="above_"></div>
            <div class="_"></div>
        </div>
        <div class="mainpage-news-content">
            <div class="grade-post">
                <div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>
                <div class="post-author">Nguyễn Công Hoan</div>
                <div class="post-statistic">
                    <div class="post-like"><i class="fas fa-heart"
                                              style="color: #e06666; margin-right: 6px;"></i>96
                    </div>
                    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342
                    </div>
                </div>
                <div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù
                    và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm
                </div>
            </div>
            <div class="grade-post">
                <div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>
                <div class="post-author">Nguyễn Công Hoan</div>
                <div class="post-statistic">
                    <div class="post-like"><i class="fas fa-heart"
                                              style="color: #e06666; margin-right: 6px;"></i>96
                    </div>
                    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342
                    </div>
                </div>
                <div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù
                    và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm
                </div>
            </div>
            <div class="grade-post">
                <div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>
                <div class="post-author">Nguyễn Công Hoan</div>
                <div class="post-statistic">
                    <div class="post-like"><i class="fas fa-heart"
                                              style="color: #e06666; margin-right: 6px;"></i>96
                    </div>
                    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342
                    </div>
                </div>
                <div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù
                    và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm
                </div>
            </div>
            <div class="grade-post">
                <div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>
                <div class="post-author">Nguyễn Công Hoan</div>
                <div class="post-statistic">
                    <div class="post-like"><i class="fas fa-heart"
                                              style="color: #e06666; margin-right: 6px;"></i>96
                    </div>
                    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342
                    </div>
                </div>
                <div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù
                    và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm
                </div>
            </div>
            <div class="grade-post">
                <div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>
                <div class="post-author">Nguyễn Công Hoan</div>
                <div class="post-statistic">
                    <div class="post-like"><i class="fas fa-heart"
                                              style="color: #e06666; margin-right: 6px;"></i>96
                    </div>
                    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342
                    </div>
                </div>
                <div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù
                    và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm
                </div>
            </div>
            <div class="grade-post blur-content">
                <div class="post-title">Phân tích đấu tranh cho một thế giới hòa bình</div>
                <div class="post-author">Nguyễn Công Hoan</div>
                <div class="post-statistic">
                    <div class="post-like"><i class="fas fa-heart"
                                              style="color: #e06666; margin-right: 6px;"></i>96
                    </div>
                    <div class="post-view"><i class="far fa-eye" style="color: #6ea3ed; margin-right: 6px;"></i>342
                    </div>
                </div>
                <div class="post-content">Có xu hướng đe dọa các đồng minh lâu năm, nhưng lại gần gũi với kẻ thù
                    và cự tuyệt mọi lời tư vấn có xu hướng công khai đe dọa các đồng minh lâu năm
                </div>
            </div>
        </div>
        <div class="grade-shadow"></div>
        <div class="flex-row-nowrap">
            <div class="grade-btn" style="margin-bottom: 72px;">Xem thêm</div>
        </div>
    </div>
</div>

