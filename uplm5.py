import streamlit as st

# INPUTAN USER
with st.sidebar.form("Input Data Perpustakaan"):
    # UNTUK PERPUSTAKAAN UMUM
    jml_unit_perp_kabkota_standar = st.number_input("Jumlah perpustakaan kabupaten standar", value=0)
    jml_unit_perp_kabkota = st.number_input("Jumlah unit perpustakaan kabupaten", value=0)
    jml_unit_perp_kec_standar = st.number_input("Jumlah perpustakaan kecamatan standar", value=0)
    jml_unit_perp_kec = st.number_input("Jumlah unit perpustakaan kecamatan", value=0)
    jml_unit_perp_desa_standar = st.number_input("Jumlah perpustakaan desa standar", value=0)
    jml_unit_perp_desa = st.number_input("Jumlah unit perpustakaan desa", value=0)

    # UNTUK PERPUSTAKAAN SEKOLAH
    jml_unit_perp_sdMi_standar = st.number_input("Jumlah perpustakaan SD/MI standar", value=0)
    jml_unit_perp_sdMi = st.number_input("Jumlah unit perpustakaan SD/MI", value=0)
    jml_unit_perp_smpMts_standar = st.number_input("Jumlah perpustakaan SMP/MTS standar", value=0)
    jml_unit_perp_smpMts = st.number_input("Jumlah unit perpustakaan SMP/MTS", value=0)
    jml_unit_perp_smaMa_standar = st.number_input("Jumlah perpustakaan SMA/MA standar", value=0)
    jml_unit_perp_smaMa = st.number_input("Jumlah unit perpustakaan SMA/MA", value=0)

    # UNTUK PERPUSTAKAAN PERGURUAN TINGGI
    jml_unit_perp_perguruan_standar = st.number_input("Jumlah tenaga perpustakaan perguruan standar", value=0)
    jml_unit_perp_perguruan = st.number_input("Jumlah unit perpustakaan perguruan tinggi", value=0)

    # UNTUK PERPUSTAKAAN KHUSUS
    jml_unit_perp_khusus_standar = st.number_input("Jumlah tenaga perpustakaan khusus standar", value=0)
    jml_unit_perp_khusus = st.number_input("Jumlah unit perpustakaan khusus", value=0)

    submitted = st.form_submit_button("Submit")

if submitted:
    def perpustakaan_umum5():
        hitung_kabkota5 = jml_unit_perp_kabkota_standar / jml_unit_perp_kabkota if jml_unit_perp_kabkota != 0 else 0
        hitung_kec5 = jml_unit_perp_kec_standar / jml_unit_perp_kec if jml_unit_perp_kec != 0 else 0
        hitung_desa5 = jml_unit_perp_desa_standar / jml_unit_perp_desa if jml_unit_perp_desa != 0 else 0

        total1 = (hitung_kabkota5 + hitung_kec5 + hitung_desa5)
        return total1

    def perpustakaan_sekolah5():
        hitung_sd5 = jml_unit_perp_sdMi_standar / jml_unit_perp_sdMi if jml_unit_perp_sdMi != 0 else 0
        hitung_smp5 = jml_unit_perp_smpMts_standar / jml_unit_perp_smpMts if jml_unit_perp_smpMts != 0 else 0
        hitung_sma5 = jml_unit_perp_smaMa_standar / jml_unit_perp_smaMa if jml_unit_perp_smaMa != 0 else 0

        total2 = (hitung_sd5 + hitung_smp5 + hitung_sma5)
        return total2

    def perpustakaan_perguruan5():
        hitung_perguruan5 = jml_unit_perp_perguruan_standar / jml_unit_perp_perguruan if jml_unit_perp_perguruan != 0 else 0
        return hitung_perguruan5

    def perpustakaan_khusus5():
        hitung_khusus5 = jml_unit_perp_khusus_standar / jml_unit_perp_khusus if jml_unit_perp_khusus != 0 else 0
        return hitung_khusus5

    total_perpustakaan_umum5 = perpustakaan_umum5()
    total_perpustakaan_sekolah5 = perpustakaan_sekolah5()
    total_perpustakaan_perguruan5 = perpustakaan_perguruan5()
    total_perpustakaan_khusus5 = perpustakaan_khusus5()
    angka_koreksi = 2.5

    hasil_uplm5 = (((0.5 * total_perpustakaan_umum5) + (0.2 * total_perpustakaan_sekolah5) +
                   (0.2 * total_perpustakaan_perguruan5) + (0.1 * total_perpustakaan_khusus5)) * angka_koreksi)

    st.write("Jumlah ratio ketercukupan koleksi untuk perpustakaan umum adalah : ", total_perpustakaan_umum5)
    st.write("Jumlah ratio ketercukupan koleksi untuk perpustakaan sekolah/madrasah adalah : ", total_perpustakaan_sekolah5)
    st.write("Jumlah ratio perguruan tinggi", total_perpustakaan_perguruan5)
    st.write("Jumlah ratio perpustakaan khusus : ", total_perpustakaan_khusus5)
    st.write("Nilai UPLM5 adalah : ", hasil_uplm5)
