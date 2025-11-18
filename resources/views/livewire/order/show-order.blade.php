 <form id="orderForm" class="needs-validation" novalidate>
     <!-- Pemesan -->
     <div class="card mb-4 shadow-sm">
         <div class="card-header bg-primary text-white fw-semibold">
             Data Pemesan
         </div>
         <div class="card-body">
             <div class="row g-3">
                 <div class="col-md-6">
                     <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                     <input id="namaPemesan" class="form-control" required />
                     <div class="invalid-feedback">Nama wajib diisi.</div>
                 </div>
                 <div class="col-md-6">
                     <label class="form-label">No HP <span class="text-danger">*</span></label>
                     <input id="hpPemesan" class="form-control" required placeholder="08xxxxxxxxxx" />
                     <div class="invalid-feedback">No HP wajib diisi.</div>
                 </div>
                 <div class="col-md-6">
                     <label class="form-label">Email (opsional)</label>
                     <input id="emailPemesan" type="email" class="form-control" />
                 </div>
                 <div class="col-md-6">
                     <label class="form-label">Alamat (opsional)</label>
                     <input id="alamatPemesan" class="form-control" />
                 </div>
             </div>
         </div>
     </div>

     <!-- Jamaah -->
     <div class="card mb-4 shadow-sm">
         <div class="card-header bg-warning fw-semibold">Data Jamaah</div>
         <div class="card-body" id="jamaahContainer">
             <!-- default item -->
             <div class="jamaah-item border rounded p-3 mb-3">
                 <div class="d-flex justify-content-between align-items-center mb-2">
                     <h6 class="fw-bold mb-0">Jamaah 1</h6>
                 </div>
                 <div class="row g-3">
                     <div class="col-md-6">
                         <label class="form-label">Nama Jamaah <span class="text-danger">*</span></label>
                         <input class="form-control jamaah-nama" required />
                     </div>
                     <div class="col-md-6">
                         <label class="form-label">NIK <span class="text-danger">*</span></label>
                         <input class="form-control jamaah-nik" required />
                     </div>
                     <div class="col-md-6">
                         <label class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                         <input type="date" class="form-control jamaah-tgl" required />
                     </div>
                     <div class="col-md-6">
                         <label class="form-label">Pilih Harga Paket
                             <span class="text-danger">*</span></label>
                         <select class="form-select jamaah-harga" onchange="updateTotal()" required>
                             <option value="">-- Pilih Harga --</option>
                             <option data-price="25000000">
                                 Ekonomi - Rp 25.000.000 (10 Hari)
                             </option>
                             <option data-price="35000000">
                                 Reguler - Rp 35.000.000 (12 Hari)
                             </option>
                             <option data-price="45000000">
                                 VIP - Rp 45.000.000 (12 Hari)
                             </option>
                         </select>
                     </div>
                 </div>
             </div>
         </div>

         <div class="card-footer text-end">
             <button type="button" class="btn btn-sm btn-outline-primary" onclick="addJamaah()">
                 + Tambah Jamaah
             </button>
         </div>
     </div>

     <!-- Total -->
     <div class="text-center mb-4">
         <h5 class="fw-bold">
             Total Pembayaran:
             <span id="totalPayment" class="text-success">Rp 0</span>
         </h5>
     </div>

     <!-- Submit -->
     <div class="text-center">
         <button type="submit" class="btn btn-success px-5 py-2">
             Lanjutkan Pembayaran
         </button>
     </div>
 </form>
