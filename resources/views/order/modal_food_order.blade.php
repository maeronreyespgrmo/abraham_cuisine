<div class="modal fade" id="exampleModal{{ $reservation->id }}" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Order</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>
      <div class="modal-body">
          @php
          $foodorder = \App\Models\FoodOrder::where(['reservation_id' => $reservation->id])->get();
          @endphp
          
          <table border="1">
            <thead>
              <th>Food Name</th>
              <th>Preparation Time</th>
            </thead>
            <tbody>
              @foreach ($foodorder as $foodorder_item)
              <tr>
                <td>{{$foodorder_item->name}}</td>
                <td>{{$foodorder_item->preparation_time}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button>s --}}
      </div>
    </div>
  </div>
</div>