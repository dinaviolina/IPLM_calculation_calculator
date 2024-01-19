import streamlit as st

# INPUTAN USER
with st.sidebar.form("Input Data Perpustakaan"):
    # GLOBAL
    populasi_kabkot = st.number_input("Jumlah populasi kabupaten:", value=0)
    Populasi_Penduduk = st.number_input("Jumlah populasi penduduk:", value=0)

    # UNTUK PERPUSTAKAAN UMUM
    jumlah_sosialisasi_kabkota = st.number_input("Jumlah keterlibatan masyarakat sosialisasi perpustakaan kabupaten:", value=0)
    jumlah_sosialisasi_kec = st.number_input("Jumlah keterlibatan masyarakat sosialisasi perpustakaan kecamatan:", value=0)
    jumlah_sosialisasi_desa = st.number_input("Jumlah keterlibatan masyarakat sosialisasi perpustakaan desa:", value=0)

    # UNTUK PERPUSTAKAAN SEKOLAH
    jumlah_civitas_sosialisasi_sdMi = st.number_input("Jumlah civitas keterlibatan sekolah perpustakaan SD/MI:", value=0)
    jumlah_civitas_sosialisasi_smp = st.number_input("Jumlah civitas keterlibatan sekolah perpustakaan SMP/MTS:", value=0)
    jumlah_civitas_sosialisasi_sma = st.number_input("Jumlah civitas keterlibatan sekolah perpustakaan SMA/MA:", value=0)

    # UNTUK PERPUSTAKAAN PERGURUAN TINGGI
    jumlah_civitas_sosialisasi_peguruan = st.number_input("Jumlah civitas keterlibatan perpustakaan perguruan tinggi:", value=0)

    # UNTUK PERPUSTAKAAN KHUSUS
    jumlah_civitas_sosialisasi_khusus = st.number_input("Jumlah civitas keterlibatan perpustakaan khusus:", value=0)

    submitted = st.form_submit_button("Submit")

if submitted:
    def perpustakaan_umum6():
        hitung_kabkota6 = jumlah_sosialisasi_kabkota / populasi_kabkot if populasi_kabkot != 0 else 0
        hitung_kec6 = jumlah_sosialisasi_kec / populasi_kabkot if populasi_kabkot != 0 else 0
        hitung_desa6 = jumlah_sosialisasi_desa / populasi_kabkot if populasi_kabkot != 0 else 0

        total1 = (hitung_kabkota6 + hitung_kec6 + hitung_desa6)
        return total1

    def perpustakaan_sekolah6():
        hitung_sd6 = jumlah_civitas_sosialisasi_sdMi / Populasi_Penduduk if Populasi_Penduduk != 0 else 0
        hitung_smp6 = jumlah_civitas_sosialisasi_smp / Populasi_Penduduk if Populasi_Penduduk != 0 else 0
        hitung_sma6 = jumlah_civitas_sosialisasi_sma / Populasi_Penduduk if Populasi_Penduduk != 0 else 0

        total2 = (hitung_sd6 + hitung_smp6 + hitung_sma6)
        return total2

    def perpustakaan_perguruan6():
        hitung_perguruan6 = jumlah_civitas_sosialisasi_peguruan / Populasi_Penduduk if Populasi_Penduduk != 0 else 0
        return hitung_perguruan6

    def perpustakaan_khusus6():
        hitung_khusus6 = jumlah_civitas_sosialisasi_khusus / Populasi_Penduduk if Populasi_Penduduk != 0 else 0
        return hitung_khusus6

    total_perpustakaan_umum6 = perpustakaan_umum6()
    total_perpustakaan_sekolah6 = perpustakaan_sekolah6()
    total_perpustakaan_perguruan6 = perpustakaan_perguruan6()
    total_perpustakaan_khusus6 = perpustakaan_khusus6()
    angka_koreksi = 2.5

    uplm6 = (((0.5 * total_perpustakaan_umum6) + (0.2 * total_perpustakaan_sekolah6) +
             (0.2 * total_perpustakaan_perguruan6) + (0.1 * total_perpustakaan_khusus6)) * angka_koreksi)

    st.write("Jumlah ratio ketercukupan koleksi untuk perpustakaan umum adalah:", total_perpustakaan_umum6)
    st.write("Jumlah ratio ketercukupan koleksi untuk perpustakaan sekolah/madrasah adalah:", total_perpustakaan_sekolah6)
    st.write("Jumlah ratio perguruan tinggi", total_perpustakaan_perguruan6)
    st.write("Jumlah ratio perpustakaan khusus:", total_perpustakaan_khusus6)
    st.write("Nilai UPLM6 adalah:", uplm6)
