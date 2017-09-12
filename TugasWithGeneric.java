class TugasWithGeneric <Tipe1, Tipe2> {
   public Tipe1 nama;
   public Tipe2 harga;
   public TugasWithGeneric(Tipe1 namanya, Tipe2 harganya) {
      nama = namanya;
      harga = harganya;
   }

   public Tipe1 getNama() {
      return nama; 
   }

   public Tipe2 getHarga() {
      return harga; 
   }

   public static void main(String[] args) {
      TugasWithGeneric <String, Integer> sepatu;
      sepatu = new TugasWithGeneric <String, Integer> ("All New Xenia", 240000000);
      System.out.println("Contoh Generic");
      System.out.println("Nama Barang : " + sepatu.getNama());
      System.out.println("Harga : Rp " + sepatu.getHarga());
   }
}
