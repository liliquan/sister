@extends('layouts.main')

@section('content')
        <div class="search">
            <input type="text" placeholder="请输入搜索关键字" class="gjz">
            <input type="button" value="查询" class="btn">
        </div>

        <div class="middle">
            <table>
                <tr>
                    <th>姓名</th>
                    <th>电话</th>
                    <th>卡号</th>
                    <th>余额</th>
                    <th>加入时间</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td>李立权</td>
                    <td>17373834519</td>
                    <td>1234567890123</td>
                    <td>45678</td>
                    <td>2019-02-01</td>
                    <td>
                        <input type="button" value="删除" class="del">
                    </td>
                </tr>
                
            </table>
        </div>
@endsection