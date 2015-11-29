<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<script src="/Public/Static/plugins/bootstrap/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="/Public/Home/css/header.css"/>
    <link rel="stylesheet" href="/Public/Home/css/main.css">
    <link rel="stylesheet" href="/Public/Static/plugins/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/Public/Static/plugins/font-awesome/css/font-awesome.min.css"/>
    <script src="/Public/Static/plugins/jquery-2.0.2.js"></script>
    <script src="/Public/Static/plugins/bootstrap/js/bootstrap.min.js"></script>
    <title>后头管理系统</title>
</head>
<body>
    <!-- 头部 -->
    <div id="lg_header">
        <!-- 顶部黑色导航栏 -->

        <div id="lg_tbar">
            <div id="lg_tbar_1">
                <img src="/Public/Home/img/app_icon.png" alt="">
                <a href="javascript:void(0)" class="tbar_app">拉勾APP</a>
                <a href="#" class="tbar_com">|&nbsp;&nbsp;进入企业版</a>
            </div>
           <!--  <ul id="tbar_reg">
                <li>
                    <a href="">登陆</a>
                </li>
                    
                <li>
                    <a href="">注册</a>
                </li>
            </ul> -->
            
        </div> 
        <div class="lg_tnav_wrap">
            <img src="/Public/Home/img/lagou_logo.png" alt="logo">
        </div>
        <!-- 选择城市 -->
        <div id="suggestCity">
            <strong>北京站</strong>
            <em id="changeCity_btn" data-toggle="modal" data-target="#myModal">[切换城市]</em>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">切换城市</h4>
                  </div>
                  <div class="modal-body">
                    <div class="content_herader">
                        <h4>亲爱的用户您好:</h4>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换城市分站，让我们为您提供更准确的职位信息。</p>
                        <hr>
                        <span>点击进入</span>
                        <a href="javascript:void(0)" class="tab_focus">北京站</a>  

                        <span>&nbsp;&nbsp;   or  切换到其他城市</span>
                    
                    </div>
                    <ul class="clearfix list_city">
                        <li><a href="javascript:void(0)" class="tab_focus">全国站</a></li>
                        <li><a href="javascript:void(0)" class="tab_focus">全国站</a></li>
                        <li><a href="javascript:void(0)" class="tab_focus">全国站</a></li>
                        <li style="display:block;width:auto;float:none;clear:both;"></li>
                        <li><a href="javascript:void(0)" class="tab_focus">全国站</a></li>
                        <li><a href="javascript:void(0)" class="tab_focus">全国站</a></li>
                        <li><a href="javascript:void(0)" class="tab_focus">全国站</a></li>
                    </ul>
                        <br>
                        <p>其他城市正在开通中，敬请期待～</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary">更改</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        <!-- 城市选择结束 -->
        <!-- <ul class="navbar">
            <li><a href="">首页</a></li>
            <li><a href="">公司</a></li>
            <li><a href="">一拍</a></li>
        </ul> -->
        <!-- 导航 -->
        <ul class="nav nav-pills">
              <li role="presentation"><a href="#">首页</a></li>
              <li role="presentation"><a href="<?php echo U('Com/index');?>">公司</a></li>
              <li role="presentation"><a href="<?php echo U('Yipai/index');?>">一拍</a></li>
        </ul>
        <!-- 导航结束 -->
    </div>
   <!-- 头部结束 -->

   <div class="container">
       <div class="row">
           <div class="col-md-3">
           <!-- 侧导航 -->
               <div class="sidebar" id="sidebar">
                   <div class="mainNavs">
                       <!-- 产品 -->
                        <div class="menu_box">
                            <div class="menu_main">
                                <h2>产品 <span><i class="icon-chevron-right"></i></span></h2>
                                <a href="#">产品经理</a>
                                <a href="#">产品助理</a>
                                <a href="#">无线产品经理</a>
                                <a href="#">游戏策划</a>
                            </div>
                            <div class="menu_sub dn">
                                <dl class="reset">
                                    <dt>
                                    <a href="#">产品经理</a>
                                    </dt>
                                    <dd>
                                    <a href="#" class="curr">产品经理</a>
                                    <a href="#">网页产品经理</a>
                                    <a href="#"
                                    >移动产品经理</a>
                                    <a href="#">产品助理</a>
                                    <a href="">数据产品经理</a>
                                    <a href="">电商产品经理</a>
                                    <a href="">游戏策划</a>
                                    </dd>
                                </dl>
                                <dl class="reset">
                                    <dt>
                                        <a href="">产品设计师</a>
                                    </dt>
                                    <dd>
                                        <a href="">网页产品设计师</a>
                                        <a href="">无线产品设计师</a>
                                    </dd>
                                </dl>
                                <dl class="reset">
                                <dt>
                                    <a href="">高端职位</a>
                                </dt>
                                <dd>
                                    <a href="">产品部经理</a>
                                    <a href="">产品总监</a>
                                </dd>
                                </dl>
                            </div>
                        </div>
                   </div>
               </div>
               <!-- 侧导航结束 -->
           </div>
           <div class="col-md-9">
               <div class="content">
                    <!-- 搜索框 -->
                   <div class="search_input">
                       <form action="">
                           <div class="input-group">
                                <input type="text" id="search" class="form-control" placeholder="输入要搜索的职位">
                                <span class="input-group-btn">
                                    <button id="btn_search" class="btn btn-default" type="button">搜索</button>
                                </span>
                            </div><!-- /input-group -->
                       </form>
                   </div>
                    <!-- 搜索框结束 -->
                    <dl class="hotSearch">
                        <dt>热门搜索:</dt>
                        <dd><a href="">自动化测试</a></dd>
                        <dd><a href="">C#</a></dd>
                        <dd><a href="">PHP</a></dd>
                    </dl>

                    <!-- 轮播图 -->
                    <div class="home_banner">
                        <ul class="banner_bg">
                            <li><a href=""><img src="/Public/Home/img/home_zhaopian.jpg" alt=""></a></li>
                            <!-- <li><a href=""><img src="/Public/Home/img/home_global.jpg" alt=""></a></li>
                            <li><a href=""><img src="/Public/Home/img/home_plus.jpg" alt=""></a></li> -->
                        </ul>
                        <div class="banner_controller">
                            <ul class="thumbs">
                                <li><a href=""><img src="/Public/Home/img/sub_zhaopian.jpg" alt="zhaopian"></a></li>
                                <li><a href=""><img src="/Public/Home/img/sub_global.jpg" alt="global"></a></li>
                                <li><a href=""><img src="/Public/Home/img/sub_plus.jpg" alt="plus"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- 轮播图结束 -->
                    <!-- 热门企业展示 -->
                        <ul id="data_thumbs" class="data_thumbs">
                            <li>
                                <a href="">
                                    <img src="/Public/Home/img/data_thumbs1.jpg" alt="" width="113" height="113">
                                    <div class="hot_info">
                                        <h2 title="中财经润">中财经润</h2>
                                        <em></em>
                                        <p title="国家健康促进智能网络平台">国家健康促进智能网络平台</p>
                                    </div>
                                </a>
                            </li>
                            <li><a href=""><img src="/Public/Home/img/data_thumbs2.png" alt="" width="113" height="113"></a></li>
                            <li><a href=""><img src="/Public/Home/img/data_thumbs3.png" alt="" width="113" height="113"></a></li>
                            <li><a href=""><img src="/Public/Home/img/data_thumbs4.jpg" alt="" width="113" height="113"></a></li>
                            <li><a href=""><img src="/Public/Home/img/data_thumbs5.jpg" alt="" width="113" height="113"></a></li>
                            <li><a href=""><img src="/Public/Home/img/data_thumbs6.png" alt="" width="113" height="113"></a></li>
                        </ul>
                        <!-- 热门企业展示结束 -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="job_tab">
                            <li role="presentation" class="active"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">最新职位</a></li>
                            <li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">热门职位</a></li>
                        </ul>
                        <!-- Tab panes -->
                      <div class="tab-content" id="tab-content">
                                <!-- 最新职位展示 -->
                            <div role="tabpanel" class="tab-pane active" id="new">
                                <ul class="clearfix">
                                    <li class="position-list-item">
                                        <div class="pli-top">
                                            <div class="fl pli-top-l">
                                                <div class="position-name">
                                                    <h2 class="fl"><a href="" class="position-link fl wordCut">PHP开发工程师</a><span>[北京]</span> </h2>
                                                    <span class="time fl">2015-09-28</span>
                                                </div>
                                                <div class="f1 jd">
                                                    <span class="salary fl">15-30K</span>
                                                    <span>经验一到三年</span>
                                                    <span>&nbsp;/&nbsp;</span>
                                                    <span>本科</span>
                                                </div>
                                            </div>

                                            <div class="fr pli-top-r">
                                                <div class="company-name">
                                                    <a href="">人人行</a>
                                                </div>
                                                <div class="industry">
                                                    <span>互联网 * 金融</span><span>/</span>
                                                    <span>成熟型(不需要融资)</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pli-btm">
                                            <div class="pli-btm-l fl">
                                               <span>
                                                   ”九鼎出品;六险一金;节日礼物“
                                               </span> 
                                            </div>
                                            <div class="pli-btm-r fl">
                                                <span>年底双薪</span>
                                                <span>节日礼物</span>
                                                <span>绩效奖金</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                                <!-- 最新职位展示end -->

                                <!-- 最热门职位展示开始 -->
                            <div role="tabpanel" class="tab-pane" id="hot">
                                <ul class="clearfix">
                                    <li class="position-list-item">
                                        <div class="pli-top">
                                            <div class="fl pli-top-l">
                                                <div class="position-name">
                                                    <h2 class="fl"><a href="" class="position-link fl wordCut">抓取高级</a><span>[北京]</span> </h2>
                                                    <span class="time fl">2015-1-28</span>
                                                </div>
                                                <div class="f1 jd">
                                                    <span class="salary fl">40-50K</span>
                                                    <span>经验一到三年</span>
                                                    <span>&nbsp;/&nbsp;</span>
                                                    <span>本科</span>
                                                </div>
                                            </div>

                                            <div class="fr pli-top-r">
                                                <div class="company-name">
                                                    <a href="">人人行</a>
                                                </div>
                                                <div class="industry">
                                                    <span>互联网 * 金融</span><span>/</span>
                                                    <span>成熟型(不需要融资)</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pli-btm">
                                            <div class="pli-btm-l fl">
                                               <span>
                                                   ”九鼎出品;六险一金;节日礼物“
                                               </span> 
                                            </div>
                                            <div class="pli-btm-r fl">
                                                <span>年底双薪</span>
                                                <span>节日礼物</span>
                                                <span>绩效奖金</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                                <!-- 最热门职位展示end -->
                      </div>
               </div>
           </div>

       </div>
   </div>
</body>
<script type="text/javascript">
    $(function(){
        $(".tab_focus").each(function(){
            $(this).mouseover(function(){
                $(this).css({'border':'2px solid #00B38A'});
            }).mouseout(function(){
                $(this).css({'border':'2px solid #ccc'});
            });
        });
    });
    // $(function(){
    //     $(".menu_box").each(function(){
    //         $(this).mouseover(function(){
    //             $(this).find(".menu_sub").css({'display':'block'});
    //             $(this).addClass('active');
    //         }).mouseout(function(){
    //             $(this).find(".menu_sub").css({'display':'none'});
    //             $(this).removeClass('active');
    //         });
    //     });
    // });

    $(function(){
        $('.thumbs').children('li').each(function(){
            $(this).mouseover(function(){
                var name=$(this).find('img').attr('alt');
                $(this).css({'border':'3px solid #00b38a'});
                // $(this).css({'background':'url()'})
                $('.banner_bg').find('img').attr('src','/Public/Home/img/home_'+name+'.jpg');
            }).mouseout(function(){
                $(this).css({'border':'3px solid #d3d3d3'});
            });
        })
        // $('.banner_bg').
    });
    //todo wrong
// i=0;
// function run(){
//     $(function(){
//         var con=$('.thumbs>li').length;
//         $('.thumbs>li').eq(i).css({'border':'3px solid #00b38a'});
//         i++;
//     });
//     setTimeout(run,3000);
// }
// run();

    $(function(){
        $('#data_thumbs').children('li>img').each(function(){
            $(this).mouseover(function(){
                $(this).next('div').slideDown().css({'top':'-115px'});
            }).mouseout(function(){
                $(this).next('div').slideUp().css({'top':'+115p'});
            });
        });
    });

    //标签页
    $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show');

        });

    //todo wrong
//     $(function(){
//         $("#job_tab").children('.active').click(function(){
//                 $(this).css({"border-top":"2px solid #00b38a"});
//         });
// });
</script>
</html>