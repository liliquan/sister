@extends('layouts.main')

@section('content')
        <h1>添加新顾客</h1>
        <div class="middle">
            <form action="add_user" method="post">
                {{csrf_field()}}
                <p>姓名:</p> 
                <input type="text" name="name" placeholder="请输入顾客姓名" onblur="CheckForm(this.value)">
                <p>电话:</p> 
                <input type="text" name="tel" placeholder="请输入顾客电话" onblur="validatemobile(this.value)">
                <p>金额:</p> 
                <input type="text" name="money" placeholder="请输入充值金额">
                <p>卡号:</p> 
                <input type="text" name="card" placeholder="请输入卡号">
                <input type="submit" class="btn" id="btn" value="添加">
            </form>
            <div class="notice" id="notice" style="display:none">
                <span>警告：</span>
                <p class="xinxi"></p>
            </div>
        </div>
@endsection


<script>
    function CheckForm(obj) 
    { 
        if (obj.trim.length == 0) { 
            document.querySelector('.xinxi').innerHTML = '姓名不能为空！';
            document.querySelector('.notice').style.display = 'block';
            document.getElementById('btn').disabled="true" ;
            return false;      
        }
        else
        {
            document.getElementById("notice").style.display="none";
            return true;
        }
    } 


    function validatemobile(mobile) 
    { 
        if(mobile.trim.length==0) 
        { 
            document.querySelector('.xinxi').innerHTML = '手机号不能为空！';
            document.querySelector('.notice').style.display = 'block';    
            return false;
        }
        
        if(mobile.trim.length!=11) 
        { 
            document.querySelector('.xinxi').innerHTML = '请输入有效的手机号码，需是11位！';
            document.querySelector('.notice').style.display = 'block';
            return false; 
        } 

        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1})|(17[0-9]{1}))+\d{8})$/; 
        if(!myreg.trim.test(mobile)) 
        { 
            document.querySelector('.xinxi').innerHTML = '请输入有效的手机号码！';
            document.querySelector('.notice').style.display = 'block';
            return false;   
        } 
        else
        {
            document.getElementById("notice").style.display="none";
            return true;
        }

    } 


</script>
