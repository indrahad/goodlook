import java.util.Scanner; // mengimport kelas scanner
class Tugas {
   // deklarasi public static variabel
   static String[] kab = {"Bantul", "Sleman", "Kulon Progo", "Gunung Kidul", "Yogyakarta"};
   static String large;
   static int i, j, index, n = 5;

   // deklarasi method sort dengan tidak ada nilai kembalian 
   // method ini untuk mengurutkan data yang tadi diinputkan
   public void sort() {
      for (i = n-1; i > 0; i--) { // perulangan sebanyak jumlah data
         large = kab[0]; // deklarasi variabel large diambil dari data pertama
         index = 0; // deklarasi variabel index = 0
         for (j = 1; j <= i; j++) { // perulangan sebanyak var. I
	     // jika data ke j lebih besar dari var. large, maka
            if (kab[j].compareTo(large) > 0) { 
               large = kab[j]; // update var. large menjadi data ke j
               index = j; // update var. index menjadi var. j
            }
         }
         // memindah posisi data
         kab[index] = kab[i];
         kab[i] = large;
      }
      System.out.println("\n"); // ganti baris setelah pengurutan
   }

   // method utama
   public static void main(String[] args) {
      Tugas huhu = new Tugas(); // instance object dari class Tugas
      System.out.println("PENGURUTAN MENGGUNAKAN SELECTION SORT"); 
      System.out.println("Data " + n + " nilai yg di input (sebelum diurutkan): ");
      // perulangan untuk menampilkan data (sebelum diurutkan)
      for (int i = 0; i < n; i++) {
         System.out.print(kab[i] + ", ");
      }

      huhu.sort(); // eksekusi method sort pada object huhu

      System.out.println("Data " + n + " nilai yg di input (setelah diurutkan): ");
      // menampilkan data yg baru (setelah diurutkan)
      for (i = 0; i < n; i++) {
         System.out.print(kab[i] + ", ");
      }
      System.out.println(); // ganti baris
      System.out.println(); // ganti baris
   }
}