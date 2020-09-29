<p class="text-white"> No Faktur :
    {{ $penjualan_kredit->no_struk }}
</p>

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
