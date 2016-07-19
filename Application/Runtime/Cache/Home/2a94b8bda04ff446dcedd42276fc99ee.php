<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>stackfull首页</title>
    <link rel="stylesheet" href="/StackFull/Public/bootstrap/css/bootstrap.css" />
    <script type="text/javascript" src="/StackFull/Public/bootstrap/js/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="/StackFull/Public/bootstrap/js/bootstrap.min.js"></script>

    <style type="text/css">
        body{
            margin-top: 10px;
        }
        nav a{
            color: #ffffff;
            background-color: #4285F4;
        }

         .col-center-block {
             width: 60%;
             float: none;
             display: block;
             margin-left: auto;
             margin-right: auto;
         }

    </style>
</head>
<body>
<div class="container">
<nav class="navbar navbar-dark bg-primary" style="background-color: #4285F4;" role="navigation">
    <div class="navbar-header">
        <div class="navbar-default">
        <button type="button" class="nav navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse" >
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="color: #ffffff;">StackFull</a></div>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a class="" href="#">StayFoolish</a>
        </li>
        <li class="">
            <a class="" href="#">StayHungry</a>
        </li>
        <li class="">
            <a class="" href="#">Webnav</a>
        </li>
    </ul>
        <form class="form-inline navbar-form pull-right">
            <input class="form-control" type="text" placeholder="Search" >
            <span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;</span>

            <button type="button" class="btn btn-info btn-xs">登录</button>
            <button type="button" class="btn btn-warning btn-xs">注册</button>
        </form>

        </div>

</nav>

<div class="jobcontent" style="padding: 10px 0px 10px; float: left; width: 800px">
<div style="padding: 10px 100px 10px;">
    <form class="bs-example bs-example-form" role="form">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="职位关键字">
                    <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                     搜索职位
                  </button>
               </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </form>
    <div class="jobtag" style="padding: 10px 100px 10px; ">
        <span style="padding: 0px 10px; float: left">热搜职位：&nbsp</span>
        <a href="#" data-lg-tj-id="4A00" data-lg-tj-no="0002" data-lg-tj-cid="idnull">PHP&nbsp</a>
        <a href="#" data-lg-tj-id="4A00" data-lg-tj-no="0005" data-lg-tj-cid="idnull">Android&nbsp</a>
        <a href="#" data-lg-tj-id="4A00" data-lg-tj-no="0008" data-lg-tj-cid="idnull">前端&nbsp</a>
    </div>

</div>
<div style="padding: 10px 100px 10px;">
    <h2>最新职位</h2>
    <hr/>
    <li class="position_list_item"  data-jobId = "2036462" data-positionid="2036462" data-salary="20k-30k" data-company="这里科技（北京总部）" data-positionname="Python后台研发工程师" data-companyid="33236">
        <div class="pli_top">
            <div class="fl pli_top_l">
                <div class="position_name">
                    <!--  -->
                    <h2 class="fl"><a href="#"  class="position_link fl wordCut" data-index="4" data-lg-tj-id="rx00" data-lg-tj-no="0005" data-lg-tj-cid="2036462">Python后台研发工程师<span>[北京]</span></a></h2>
                    <!-- 此处需要和后台确认 -->
                    <span class="fl">2016-07-19 09:20 发布</span>
                </div>
                <div>
                    <span class="salary fl">20k-30k</span>
                    <span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>大专</span>
                </div>
            </div>
            <div class="fr pli_top_r">
                <div class="company_name wordCut">
                    <a href="#" target="_blank" data-lg-tj-id="vz00" data-lg-tj-no="0005" data-lg-tj-cid="33236">这里科技（北京总部）</a>
                </div>
                <div class="industry wordCut">
                    <span> 移动互联网</span> / <span>成长型(A轮)</span>
                </div>
            </div>
        </div>
        <div class="pli_btm">
            <div class="pli_btm_l fl wordCut">
                “良好氛围,原始股,弹性工作,万元房补”
            </div>
            <div class="pli_btm_r fl">
                <span>项目前景好</span>
                <span>团队特欢乐</span>
                <span>都8590后</span>
            </div>
        </div>
    </li>
    <hr>
    <li class="position_list_item"  data-jobId = "2112133" data-positionid="2112133" data-salary="10k-20k" data-company="会米" data-positionname="前端开发" data-companyid="134289">
        <div class="pli_top">
            <div class="fl pli_top_l">
                <div class="position_name">
                    <!--  -->


                    <h2 class="fl"><a href="#"  class="position_link fl wordCut" data-index="14" data-lg-tj-id="rx00" data-lg-tj-no="0015" data-lg-tj-cid="2112133">前端开发<span>[北京]</span></a></h2>
                    <!-- 此处需要和后台确认 -->
                    <span class="fl">2016-07-19 09:19 发布</span>
                </div>
                <div>
                    <span class="salary fl">10k-20k</span>
                    <span><!-- <i class="experience"></i>&nbsp;  -->经验1-3年</span> / <span>本科</span>
                </div>
            </div>
            <div class="fr pli_top_r">
                <div class="company_name wordCut">
                    <a href="#" target="_blank" data-lg-tj-id="vz00" data-lg-tj-no="0015" data-lg-tj-cid="134289">会米</a>
                </div>
                <div class="industry wordCut">
                    <span> 数据服务,企业服务</span> / <span>初创型(天使轮)</span>
                </div>
            </div>
        </div>
        <div class="pli_btm">
            <div class="pli_btm_l fl wordCut">
                “弹性制工作，高薪期权，团队成熟，因人设岗”
            </div>
            <div class="pli_btm_r fl">
                <span>股票期权</span>
                <span>技能培训</span>
                <span>岗位晋升</span>
            </div>
        </div>
    </li>
    <hr>
    <li class="position_list_item"  data-jobId = "2113637" data-positionid="2113637" data-salary="15k-30k" data-company="航天丝路" data-positionname="全栈工程师" data-companyid="81279">
        <div class="pli_top">
            <div class="fl pli_top_l">
                <div class="position_name">
                    <!--  -->


                    <h2 class="fl"><a href="#" class="position_link fl wordCut" data-index="11" data-lg-tj-id="rx00" data-lg-tj-no="0012" data-lg-tj-cid="2113637">全栈工程师<span>[北京]</span></a></h2>
                    <!-- 此处需要和后台确认 -->
                    <span class="fl">2016-07-19 09:18 发布</span>
                </div>
                <div>
                    <span class="salary fl">15k-30k</span>
                    <span><!-- <i class="experience"></i>&nbsp;  -->经验3-5年</span> / <span>本科</span>
                </div>
            </div>
            <div class="fr pli_top_r">
                <div class="company_name wordCut">
                    <a href="#" target="_blank" data-lg-tj-id="vz00" data-lg-tj-no="0012" data-lg-tj-cid="81279">航天丝路</a>
                </div>
                <div class="industry wordCut">
                    <span> 电子商务,金融</span> / <span>成长型(A轮)</span>
                </div>
            </div>
        </div>
        <div class="pli_btm">
            <div class="pli_btm_l fl wordCut">
                “年底双薪,节日福利,五险一金,央企”
            </div>
            <div class="pli_btm_r fl">
                <span>股票期权</span>
                <span>绩效奖金</span>
                <span>扁平管理</span>
            </div>
        </div>
    </li>
    <hr>
    <div style="padding: 10px 110px 20px; float: right">
        <a href="#" class="list_more fr" target="_blank" data-lg-tj-id="4s00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">更多职位</a>
    </div>
</div>
</div>
<div class="side" >
    <div class="col-xs-12 col-md-3 side mt40">
        <div class="widget-box widget-job-list widget-job-list--interested clearfix">
        <h5 class="widget-job-list__heading">个人档案</h5>
        <div class="mt15 ml20 mr10">
            <p class="h5 fz16 text-red">你的档案一片空白啊</p>
            <p class="text-muted">把擅长什么开发，用啥编辑器，有什么开源项目等等，通通亮上。</p>
            <a href="javascript:void(0);" target="_blank" class="SFLogin mt5 pull-left btn btn-primary">创建我的档案</a>
            <!--<img class="pull-right" height="68" src="https://sf-static.b0.upaiyun.com/v-578ca37d/global/img/invite-profile.png">-->
        </div>
        </div>
        <hr>
    </div>
    <div class="job-recommend" style="float: left">
        <h4>感兴趣的职位</h4>
        <li class="similar_list_item ">
            <a href="#" >
                    <h2 title="PHP">PHP</h2>
                    <p>20k-40k 滴滴出行 [北京·马连洼]
                    </p>
            </a>
        </li>
        <hr>
        <li class="similar_list_item ">
            <a href="#" >
                <h2 title="PHP">PHP</h2>
                <p>20k-40k 京东到家 [北京·亦庄]
                </p>
            </a>
        </li>
        <hr>
        <li class="similar_list_item ">
            <a href="#" >
                <h2 title="PHP">PHP</h2>
                <p>20k-40k 美团外卖 [北京·望京]
                </p>
            </a>
        </li>
        <hr>
        <a href="#" class="jobs_similar_footer" target="_blank" data-lg-tj-id="9700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多相似职位</a>
    </div>
</div>
<!--<div class="footer">-->
    <!--<div class="foot-content">-->
        <!--<a href="#">关于我们</a>　|　-->
        <!--<a href="#">联系我们</a>　|　-->
        <!--<a href="#">版权声明</a>　|　-->
        <!--<a href="#">友情链接</a>-->
        <!--<span><a href="mailto:stackfull@163.com">Email : stackfull@163.com</a>　　&copy;SF</span>-->
    <!--</div>-->
<!--</div>-->

<div class="row footer col-center-block">
    <div class="col-xs-8 col-md-4 col-lg-12">
        <a href="#">关于我们</a>　|　
        <a href="#">联系我们</a>　|　
        <a href="#">版权声明</a>　|　
        <a href="#">友情链接</a>　|　
        <span><a href="mailto:stackfull@163.com">Email : stackfull@163.com</a>　&copy;SF</span>
    </div>
</div>

</div>
</body>
</html>