<p class="text-white mb-0"> Tanggal Transaksi :
    {{ date('d M Y ', strtotime ($penjualan_kredit->created_at)) }}
</p>

<p class="text-white mt-0"> No Faktur :
    {{ $penjualan_kredit->no_struk }}
</p>

@if ( $penjualan_kredit->grand_total === $penjualan_kredit->sisa )
<div class="row justify-content-center">
    <p class="text-white"><span class="badge badge-danger">Tidak Ada Riwayat Pembayaran</span></p>
</div>
@else
<table class="table">
    <thead  class="table-dark">
        <th style="width: 250px">Sebesar</th>
        <th>Tanggal</th>
    </thead>
    <tbody>
        @foreach ($penjualan_kredit->riwayat as $item)
        <tr>
            <td>
               Rp. {{ number_format($item->total_pembayaran,0) }}
            </td>
            <td>
                {{ date('d F Y ', strtotime ($penjualan_kredit->created_at)) }}
            </td>
        </tr>
        @endforeach
    </tbody> 
</table>
@endif
