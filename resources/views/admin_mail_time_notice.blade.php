<!-- 管理者に送られるメールの本文 -->
{{ $name }}様より予約が行われました。<br>
<br>
予約情報<br>
<br>
・お部屋名:{{ $room_name }}<br>
・予約日:{{ $date }}<br>
・ご利用開始時間:{{ $start_time }}<br>
・ご利用終了時間:{{ $end_time }}<br>
・予約番号:{{ $reserve_num }}<br>
・ご利用料金:{{ $money }}円<br>
・ご登録の身分証(表面)<br>
{{ $front }}<br>
・ご登録の身分証(裏面)<br>
{{ $back }}<br>
<br>
　ご予約されたお部屋の詳細情報:<br>
<a href="https://rentier.jp/room_detail/{{$room_id}}">詳細情報を見る</a>