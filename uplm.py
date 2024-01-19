import streamlit as st
# Initialize session state
if 'result_data' not in st.session_state:
    st.session_state.result_data = {}
st.title("UPLM3 Calculator")
angka_koreksi = 2.5
angka_pembagi_ratio = st.number_input("Masukkan angka pembagi ratio:")
populasi = st.number_input("Masukkan populasi:")

def jumlah ():
    tenaga_kab = st.number_input("Masukkkan Jumlah Tenaga Perpustakaan Kabupaten ")
    jml_unit_kab = tenaga_kab/angka_pembagi_ratio
    st.write("Jumlah tenaga Kabupaten {:.6f}".format(jml_unit_kab))
    # mendapatkan jml angka_pembagi_ratio tenaga perpustakaan umum kecamatan
    tenaga_kec = st.number_input("Masukkkan Jumlah tenaga Perpustakaan Kecamatan ")
    jml_unit_kec = tenaga_kec/populasi
    st.write("Jumlah tenaga Kecamatan {:.6f}".format(jml_unit_kec))
    tenaga_ds = st.number_input("Masukkkan Jumlah tenaga Perpustakaan Desa/ Kelurahan ")
    jml_unit_ds = tenaga_ds/populasi
    st.write("Jumlah tenaga Desa",jml_unit_ds)
    perpustakaan_umum=(jml_unit_kab + jml_unit_kec + jml_unit_ds)
    st.session_state.result_data['perpustakaan_umum'] = perpustakaan_umum
    return perpustakaan_umum
def perpustakaan_sekolah():
    tenaga_sd = st.number_input("Masukkan jumlah tenaga perpustakaan sd/MI:")
    civitas_sd = st.number_input("Masukkan jumlah civitas perpustakaan sd/MI:")
    perhitungan_sd = tenaga_sd / civitas_sd

    tenaga_smp = st.number_input("Masukkan jumlah tenaga perpustakaan smp:")
    civitas_smp = st.number_input("Masukkan jumlah civitas perpustakaan smp:")
    perhitungan_smp = tenaga_smp / civitas_smp

    tenaga_sma = st.number_input("Masukkan jumlah tenaga perpustakaan SMA:")
    civitas_sma = st.number_input("Masukkan jumlah civitas perpustakaan SMA:")
    perhitungan_sma = tenaga_sma / civitas_sma

    sekolah = perhitungan_sd + perhitungan_smp + perhitungan_sma
    st.session_state.result_data['total_perpustakaan_sekolah'] = sekolah
    return sekolah
def perpustakaan_PT ():
    tenaga_pt = st.number_input("Masukkan jumlah tenaga perpustakaan PT : ")
    civitas_pt = st.number_input("Masukkan jumlah civitas PT : ")
    perhitungan_pt = tenaga_pt/civitas_pt
    st.session_state.result_data['total_perpustakaan_pt'] = perhitungan_pt
    return perhitungan_pt
def perpustakaan_khusus ():
    try :
        tenaga_khusus = st.number_input("Masukkan jumlah tenaga perpustakaan khusus : ")
        civitas_khusus = st.number_input("Masukkan jumlah pegawai perpustakaan khusus : ")
        perhitungan_khusus = tenaga_khusus/civitas_khusus
        st.session_state.result_data['k'] = perhitungan_khusus
        return perhitungan_khusus
    except ZeroDivisionError:
        st.write("Error: Division by zero. Masukkan nilai pegawai perpustakaan khusus yang tidak nol.")
        return 0

total_perpustakaan_umum = jumlah()
# Input values for perpustakaan sekolah
st.subheader("Jumlah Tenaga Perpustakaan SD/MI")
total_perpustakaan_sekolah = perpustakaan_sekolah()
# Input values for perpustakaan PT
st.subheader("Jumlah Tenaga Perpustakaan PT")
total_perpustakaan_pt = perpustakaan_PT()
st.subheader("Jumlah Tenaga Perpustakaan Khusus")
k = perpustakaan_khusus()
hasil_perhitungan_k = st.session_state.result_data('k')
# Calculate UPLM3
uplm3 = ((
    (0.5 * st.session_state.result_data['perpustakaan_umum'])
    + (0.2 * st.session_state.result_data['total_perpustakaan_sekolah'])
    + (0.2 * st.session_state.result_data['total_perpustakaan_pt'])
    + (0.1 * hasil_perhitungan_k ))
    * angka_koreksi
)

# Display results
st.subheader("Hasil Perhitungan:")
st.write("Jumlah perhitungan perpustakaan umum adalah:", st.session_state.result_data['perpustakaan_umum'])
st.write("Jumlah perhitungan perpustakaan sekolah/madrasah :", st.session_state.result_data['total_perpustakaan_sekolah'])
st.write("Jumlah perhitungan perguruan tinggi:", st.session_state.result_data['total_perpustakaan_pt'])
st.write("Jumlah perhitungan perpustakaan khusus:", st.session_state.result_data['k'])
st.write("Nilai UPLM3 adalah:", uplm3)

# UPLM 4
civitas_sd = st.number_input("Masukkan civitas sd/mi : ")
civitas_smp= st.number_input("Masukkan civitas SMP : ")
civitas_sma = st.number_input("Masukkan civitas SMA : ")
civitas_akademika = st.number_input("Masukkan civitas Akademika : ")
peg_k = st.number_input("Masukkan Jumlah Pegawai/Karyawan : ")
angka_koreksi = 2.5

def kunjungan_umum():
    kunj_kab = st.number_input("Jumlah kunjungan per hari Perpustakaan Kabupaten : ")
    perhitungan_kb_u = kunj_kab/populasi
    st.write("Perhitungannya : {:.6f}".format(perhitungan_kb_u) )
    kunj_kec = st.number_input("Jumlah kunjungan per hari Perpustakaan Kecamatan : ")
    perhitungan_kc_u = kunj_kec/populasi
    st.write("Perhitungannya : {:.6f}".format(perhitungan_kc_u) )
    kunj_ds = st.number_input("Jumlah kunjungan per hari Perpustakaan Desa/Kelurahan : ")
    perhitungan_ds_u = kunj_ds/populasi
    st.write("Perhitungannya : {:.6f}".format(perhitungan_ds_u) )

    kunj_umum = (kunj_kab+kunj_kec+kunj_ds)
    return kunj_umum
def kunjungan_sekolah():
    kunj_sd = st.number_input("Jumlah kunjungan per hari Perpustakaan SD/MI : ")
    hitungan_sd = kunj_sd/civitas_sd
    st.write("Perhitungannya : {:.6f}".format(hitungan_sd) )
    kunj_smp = st.number_input("Jumlah kunjungan per hari Perpustakaan SMP : ")
    hitungan_smp = kunj_smp/civitas_smp
    st.write("Perhitungannya : {:.6f}".format(hitungan_smp) )
    kunj_sma = st.number_input("Jumlah kunjungan per hari Perpustakaan SMA : ")
    hitungan_sma = kunj_sma/civitas_sma
    st.write("Perhitungannya : {:.6f}".format(hitungan_sma) )
    kunj_skl = (hitungan_sd +hitungan_smp+hitungan_sma)
    return kunj_skl

def kunjungan_PT():
    kunj_pt = st.number_input("Jumlah kunjungan per hari Perpustakaan Perguruan Tinggi :" )
    hitungan_pt = kunj_pt/civitas_akademika
    st.write("Perhitungannya : {:.6f}".format(hitungan_pt) )
    return hitungan_pt
def kunjungan_khusus():
    kunj_k = st.number_input("Jumlah kunjungan per hari Perpustakaan Khusus :" )
    hitungan_k = kunj_k/peg_k
    st.write("Perhitungannya : {:.6f}".format(hitungan_k) )
    return hitungan_k

total_umum = kunjungan_umum()
total_sklh = kunjungan_sekolah()
total_pt = kunjungan_PT()
total_k = kunjungan_khusus()
uplm4 = (
    ((0.5*total_umum) 
    + (0.2*total_sklh)
    +(0.2*total_pt)
    +(0.1*total_k))
    * angka_koreksi)
st.write("Hasil UPLM4 : {:.6f}".format(uplm4))