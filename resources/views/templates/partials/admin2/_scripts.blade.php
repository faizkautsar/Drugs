<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.9/metisMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.2/countUp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.usa.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.13/tinymce.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.13/themes/inlite/theme.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.min.js"></script>

<script>
$(document).ready( function () {
  $('#myTable').DataTable();
} );
</script>
<script src="{{asset('assets/js/tinymce.js')}}"></script>
<script src="{{asset('assets/js/template.js')}}"></script>

<script src="https://js.pusher.com/6.0/pusher.min.js"></script>
<script type="text/javascript">
  const notify = document.querySelector('#notify');
  const messageNotify = document.querySelector('#message-notify');
  const footerNotify = document.querySelector('#footer-notify');
  const url = '{{config("app.url")}}';

  // console.log(messageNotify);

  async function showNotification(){
    let li = ``;
    const data = await getNotification()
    data.map(d => li += showMessageNotify(d));
    messageNotify.innerHTML = li;
    if(data.length > 0){
      footerNotify.innerHTML = `<a href="{{route('laporan.index')}}" class="btn btn-link text-primary fs-12">Lihat semua laporan</a>`
    }else {
      footerNotify.innerHTML = ` <span class="text-danger">Belum ada lpaoran</span>`
    }
    // console.log();
    notify.style.display = data.filter(d => d.status === 0).length > 0 ? '' : 'none'
  }

  showNotification();

  const pusher = new Pusher('c91ea1ea7088f65142a7', {
    cluster: 'ap1',
    encrypted: true
  });

   const channel = pusher.subscribe('notifikasi');
   // console.log(url);
  channel.bind('App\\Events\\LaporanEvent', function(data) {
    swal({
      title: "Laporan baru telah hadir",
      // allowOutsideClick: false
      });

      showNotification();

  });

  function getNotification(){
    return fetch(url+'karyawan/laporan/notifikasi').then(res => res.json()).then(res => res);
  }

  function showMessageNotify(d){
    return `
    <li>
      <div href="#" class="media">
        <span class="media-body">
          <span class="thumb-xs5 ${d.status === 0 ? 'user--online' : ''}">
            <span class="heading-font-family media-heading">Laporan dari ${d.user.nama}</span>
            <div class="media-content">Pelaku ${d.nama} Peran sebagai ${d.peran}</div>
            <div class="float-right mt-1">${new Date(d.created_at).toLocaleString('id-ID')}</div>
           </span>
          </span>
        </div>
    </li>
    `
  }
</script>
