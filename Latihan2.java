import java.util.Scanner; // mengimport kelas scanner
class TugasNonGeneric {
   public String nama;
   public int harga;
   public TugasNonGeneric(String namanya, int harganya) {
      nama = namanya;
      harga = harganya;
   }

   public String getNama() {
      return nama; 
   }

   public int getHarga() {
      return harga; 
   }

   public static void main(String[] args) {
      TugasNonGeneric sepatu;
      sepatu = new TugasNonGeneric("Adidas RJ2000", 345000);
      System.out.println("Contoh Non Generic");
      System.out.println("Nama Barang : " + sepatu.getNama());
      System.out.println("Harga : Rp " + sepatu.getHarga());
   }
}