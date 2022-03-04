// edit data

// edit petugas
$(document).ready(function () {
    $(".btnview").on('click', function () {

        console.log('hello word')
    });
    $(".btnedit").on('click', function () {
        $("#myedit").modal('show');
        var [id, username, nama] = [$(this).attr('data-id'), $(this).attr('data-username'), $(this).attr('data-nama')]

        // melempar data ke modal
        $('input[name=id]').val(id)
        $('input[name=username]').val(username)
        $('input[name=nama]').val(nama)
    });

    // edit pegawai
    $(".editpegawai").on('click', function () {
        $("#myedit").modal('show');
        var [id, nama, nip, alamat, username] = [$(this).attr('data-id'), $(this).attr('data-nama'), $(this).attr('data-nip'), $(this).attr('data-alamat'), $(this).attr('data-username'),]

        // melempar data ke modal
        $('input[name=id]').val(id)
        $('input[name=nama]').val(nama)
        $('input[name=nip]').val(nip)
        $('textarea[name=alamat]').val(alamat)
        $('input[name=username]').val(username)
    });

    // edit jenis
    $(".editjenis").on('click', function () {
        $("#myedit").modal('show');
        var [id, nama, kode, keterangan] = [$(this).attr('data-id'), $(this).attr('data-nama'), $(this).attr('data-kode'), $(this).attr('data-ket')]

        // melempar data ke modal
        $('input[name=id]').val(id)
        $('input[name=nama]').val(nama)
        $('input[name=kode]').val(kode)
        $('textarea[name=ket]').val(keterangan)
    });

    // edit ruang
    $(".editruang").on('click', function () {
        $("#myedit").modal('show');
        var [id, nama, kode, keterangan] = [$(this).attr('data-id'), $(this).attr('data-nama'), $(this).attr('data-kode'), $(this).attr('data-ket')]

        // melempar data ke modal
        $('input[name=id]').val(id)
        $('input[name=nama]').val(nama)
        $('input[name=kode]').val(kode)
        $('textarea[name=ket]').val(keterangan)
    });

    // edit inventaris
    $(".invenEdit").on('click', function () {
        $("#myedit").modal('show');
        var [id, nama, kode, keterangan, jumlah, jenis, ruang, kondisi] = [$(this).attr('data-id'), $(this).attr('data-nama'), $(this).attr('data-kode'), $(this).attr('data-kete'), $(this).attr('data-jumlah'), $(this).attr('data-jenis'), $(this).attr('data-ruang'), $(this).attr('data-kondisi')]

        // melempar data ke modal
        $('input[name=id]').val(id)
        $('input[name=kodei]').val(kode)
        $('input[name=namai]').val(nama)
        $('input[name=jumlahi]').val(jumlah)
        $('input[name=jenisi]').val(jenis)
        $('.ruang').val(ruang)
        // $('input[name=ruangi]').val(ruang)
        // $('input[name=kondisii]').val(kondisi)
        $('input[name=kondisii]').val(kondisi)
        $('textarea[name=keterai]').val(keterangan)
    });
    
    
    
    // end edit
    
    //  view
    $('.inven').on('click', function () {
        $('#myinven').modal('show');
        var [id, nama, kode, keterangan, jumlah, jenis, ruang, kondisi, tanggal] = [$(this).attr('data-id'), $(this).attr('data-nama'), $(this).attr('data-kode'), $(this).attr('data-kete'), $(this).attr('data-jumlah'), $(this).attr('data-jenis'), $(this).attr('data-ruang'), $(this).attr('data-kondisi'), $(this).attr('data-tanggal')]

        // melempar data ke modal
        $('input[name=idv]').val(id)
        $('input[name=kodev]').val(kode)
        $('input[name=namav]').val(nama)
        $('input[name=jumlahv]').val(jumlah)
        $('input[name=jenisv]').val(jenis)
        $('input[name=ruangv]').val(ruang)
        $('input[name=kondisiv]').val(kondisi)
        $('textarea[name=ketv]').val(keterangan)
        $('input[name=tanggalv]').val(tanggal)

    });
    
    // view petugas
    $(".viewpetugas").on('click', function () {
        $("#myviewp").modal('show');
        var [id, username, nama, password, level] = [$(this).attr('data-id'), $(this).attr('data-username'), $(this).attr('data-nama'), $(this).attr('data-nama'), $(this).attr('data-level')]

        // melempar data ke modal
        $('input[name=idp]').val(id)
        $('input[name=namap]').val(nama)
        $('input[name=usernamep]').val(username)
        $('input[name=levelp]').val(level)
    });
    
    // view pegawai
    $(".viewpegawai").on('click', function () {
        $("#myview").modal('show');
        var [id, nama, nip, alamat, username, password, level] = [$(this).attr('data-id'), $(this).attr('data-nama'), $(this).attr('data-nip'), $(this).attr('data-alamat'), $(this).attr('data-username'), $(this).attr('data.password'), $(this).attr('data-level')]
        
        // melempar data ke modal
        $('input[name=pid]').val(id)
        $('input[name=pnama]').val(nama)
        $('input[name=pnip]').val(nip)
        $('textarea[name=palamat]').val(alamat)
        $('input[name=pusername]').val(username)
        $('input[name=plevel]').val(level)
    });

    // view jenis
    $(".viewjenis").on('click', function () {
        $("#myview").modal('show');
        var [id, nama, kode, keterangan] = [$(this).attr('data-id'), $(this).attr('data-nama'), $(this).attr('data-kode'), $(this).attr('data-ket')]

        // melempar data ke modal
        $('input[name=idj]').val(id)
        $('input[name=namaj]').val(nama)
        $('input[name=kodej]').val(kode)
        $('textarea[name=ketj]').val(keterangan)
    });

    // view ruang
    $(".viewruang").on('click', function () {
        $("#myview").modal('show');
        var [id, nama, kode, keterangan] = [$(this).attr('data-id'), $(this).attr('data-nama'), $(this).attr('data-kode'), $(this).attr('data-ket')]

        // melempar data ke modal
        $('input[name=idr]').val(id)
        $('input[name=namar]').val(nama)
        $('input[name=koder]').val(kode)
        $('textarea[name=ketr]').val(keterangan)
    });

    
    // end view

    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
});
var ctx = document.getElementById("chart-bars").getContext("2d");

new Chart(ctx, {
    type: "bar",
    data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#fff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
            maxBarThickness: 6
        },],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                },
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 500,
                    beginAtZero: true,
                    padding: 15,
                    font: {
                        size: 14,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                    },
                    color: "#fff"
                },
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false
                },
                ticks: {
                    display: false
                },
            },
        },
    },
});


var ctx2 = document.getElementById("chart-line").getContext("2d");

var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

new Chart(ctx2, {
    type: "line",
    data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

        },
        {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
        },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    padding: 10,
                    color: '#b2b9bf',
                    font: {
                        size: 11,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                    },
                }
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    color: '#b2b9bf',
                    padding: 20,
                    font: {
                        size: 11,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                    },
                }
            },
        },
    },
});
$(document).ready(function () {
    $("btnbtn").click(function () {
        $("#mymodal").fadeToggle(3000);
    });
});
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
        damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
