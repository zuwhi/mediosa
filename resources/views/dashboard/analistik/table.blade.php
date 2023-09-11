                      {{-- {{ $table }} --}}
                         
                            @foreach ($table as $item)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item->nama }}</td>
                              <td>{{ $item->jumlah_penyakit }}</td>
                            </tr>
                            @endforeach
                      
