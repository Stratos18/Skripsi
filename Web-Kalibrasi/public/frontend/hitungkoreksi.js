$(document).ready(function () {
    // Fungsi untuk melakukan perhitungan saat nilai berubah
    function hitungNilai() {
        var kstd = parseFloat($("#koreksistd").val()) || 0;
        var b1 = parseFloat($("#baca1").val()) || 0;
        var uut1 = parseFloat($("#bacauut1").val()) || 0;
        var b2 = parseFloat($("#baca2").val()) || 0;
        var uut2 = parseFloat($("#bacauut2").val()) || 0;
        var b3 = parseFloat($("#baca3").val()) || 0;
        var uut3 = parseFloat($("#bacauut3").val()) || 0;
        var Usertif = parseFloat($("#Usertif").val()) || 0;
        var Udriff = parseFloat($("#Udriff").val()) || 0;
        var L = parseFloat($("#resolusistd").val()) || 0;
        var inhomo = parseFloat($("#inhomo").val()) || 0;
        var korek1 = b1 + kstd - uut1;
        var korek2 = b2 + kstd - uut2;
        var korek3 = b3 + kstd - uut3;

        //bacaan standar terkoreksi
        var tkorek1 = b1 + kstd;
        var tkorek2 = b2 + kstd;
        var tkorek3 = b3 + kstd;
        //nilai max stndar
        var maxstd = Math.max(tkorek1, tkorek2, tkorek3);
        //nilai max uut
        var maxuut = Math.max(uut1, uut2, uut3);
        //nilai min stndar
        var minstd = Math.min(tkorek1, tkorek2, tkorek3);
        //nilai min uut
        var minuut = Math.min(uut1, uut2, uut3);
        //mean std
        var avgstd = (tkorek1 + tkorek2 + tkorek3) / 3;
        //mean uut
        var avguut = (uut1 + uut2 + uut3) / 3;
        var avgkoreksi = avgstd - avguut;
        //u4
        // Hitung standar deviasi
        var deviation1 = Math.pow(uut1 - avguut, 2);
        var deviation2 = Math.pow(uut2 - avguut, 2);
        var deviation3 = Math.pow(uut3 - avguut, 2);
        var variance = (deviation1 + deviation2 + deviation3) / 3;
        var standardDeviation = Math.sqrt(variance);
        //hitung u1
        var U1 = standardDeviation / Math.sqrt(3);
        var u1 = Math.pow(U1, 2);
        var v1 = Math.pow(U1, 4) / 2;
        //hitung u2
        var U2 = Usertif / 1.96;
        var u2 = Math.pow(U2, 2);
        var v2 = Math.pow(U2, 4) / 50;
        //hitung u3
        var U3 = Udriff / Math.sqrt(3);
        var u3 = Math.pow(U3, 2);
        var v3 = Math.pow(U3, 4) / 50;
        //u4
        var U4 = (maxstd - minstd) / (2 * Math.sqrt(3));
        var u4 = Math.pow(U4, 2);
        var v4 = Math.pow(U4, 4) / 50;
        //u5
        var U5 = (maxuut - minuut) / (2 * Math.sqrt(3));
        var u5 = Math.pow(U5, 2);
        var v5 = Math.pow(U5, 4) / 50;
        //hitung u6
        var U6 = L / 2 / Math.sqrt(3);
        var u6 = Math.pow(U6, 2);
        var v6 = Math.pow(U6, 4) / 50;
        //hitung u7
        var U7 = inhomo / Math.sqrt(3);
        var u7 = Math.pow(U7, 2);
        var v7 = Math.pow(U7, 4) / 50;
        //ugab
        var gab = u1 + u2 + u3 + u4 + u5 + u6 + u7;
        var Ugab = Math.sqrt(gab);
        var ugab = Math.pow(Ugab, 4);
        //Veff
        var sumv = v1 + v2 + v3 + v4 + v5 + v6 + v7;
        var Veff = ugab / sumv;
        //
        if (Veff <= 10) {
            var u95 = Ugab * 2.228;
            $("#u95").val(u95.toFixed(4));
        }
        if (Veff <= 20) {
            var u95 = Ugab * 2.086;
            $("#u95").val(u95.toFixed(4));
        }
        if (Veff <= 30) {
            var u95 = Ugab * 2.042;
            $("#u95").val(u95.toFixed(4));
        }
        if (Veff <= 40) {
            var u95 = Ugab * 2.021;
            $("#u95").val(u95.toFixed(4));
        }
        if (Veff <= 50) {
            var u95 = Ugab * 2.009;
            $("#u95").val(u95.toFixed(4));
        }
        if (Veff <= 100) {
            var u95 = Ugab * 1.984;
            $("#u95").val(u95.toFixed(4));
        }
        if (Veff <= 200) {
            var u95 = Ugab * 1.971;
            $("#u95").val(u95.toFixed(4));
        }
        if (Veff >= 200) {
            var u95 = Ugab * 1.96;
            $("#u95").val(u95.toFixed(4));
        }

        $("#koreksiuut1").val(korek1);
        $("#koreksiuut2").val(korek2);
        $("#koreksiuut3").val(korek3);
        $("#max_std").val(maxstd);
        $("#max_uut").val(maxuut);
        $("#min_std").val(minstd);
        $("#min_uut").val(minuut);
        $("#meanstd").val(avgstd.toFixed(4));
        $("#meanuut").val(avguut.toFixed(4));
        $("#meankoresi").val(avgkoreksi.toFixed(2));
        $("#sd").val(standardDeviation.toFixed(4));

        $("#u1").val(U1.toFixed(4));
        $("#u2").val(U2.toFixed(4));
        $("#u3").val(U3.toFixed(4));
        $("#u4").val(U4.toFixed(4));
        $("#u5").val(U5.toFixed(4));
        $("#u6").val(U6.toFixed(4));
        $("#u7").val(U7.toFixed(4));
        $("#ugab").val(Ugab.toFixed(4));
        $("#veff").val(Veff.toFixed(4));
    }

    // Panggil fungsi hitungNilai saat input nilai berubah
    $("#baca1, #koreksistd, #bacauut1,#baca2,#bacauut2,#baca3, #bacauut3").on(
        "change",
        hitungNilai
    );
});
