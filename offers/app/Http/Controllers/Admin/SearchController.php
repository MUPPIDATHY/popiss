<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\BusCat;
use App\Model\Business;
use App\Model\Offers;
class SearchController extends Controller
{
    public function buscat(Request $request)
    {
        if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = Buscat::where('name', 'like', '%'.$query.'%')->get();
         
      }
      else
      {
       $data = BusCat::orderBy('name', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $buscat)
       {
        $output .= '
        <tr>
                      <td>'.$buscat->name.'</td>
                      <td><img id="admin"src="data:image/png;base64,'.$buscat->image.'"></td>
                     
 <td><div class="card-tools">
<button type="button"id="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-kk'.$buscat->id.'">
             EDIT
                </button>   

<button type="button"id="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-sm'.$buscat->id.'">
              DELETE
                </button> 
                                             
                 
                </div></td>
                    </tr>';

       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
   
      echo json_encode($output);
     }
    }
    public function bus(Request $request)
    {
        if($request->ajax())
        {
         $output = '';
         $query = $request->get('query');
         if($query != '')
         {
          $data = Business::where('name', 'like', '%'.$query.'%')->get();
            
         }
         else
         {
          $data = Business::orderBy('name', 'asc')
            ->get();
         }
         $total_row = $data->count();
         if($total_row > 0)
         {
          foreach($data as $bus)
          {
           $output .= '
           <tr>
           <td>'.$bus->name.'</td>
           <td>'.$bus->code.'</td>
           <td><img id="admin"src="data:image/png;base64,'.$bus->image.'"></td>
           <td><a href="/admin/business/{{$bus->id}}">SHOW</a></td>
           <td>'.$bus->desription.'</td>
           <td>'.$bus->address.','.$bus->city.','.$bus->state.','.$bus->country.'</td>
           <td>'.$bus->phone.'</td>
           <td>'.$bus->email.'</td>
           <td>'.$bus->owner.'</td>
           <td><img id="admin"src="data:image/png;base64,'.$bus->ownimg.'"></td>
<td><div class="card-tools">
<button type="button" id="button"class="btn btn-warning" data-toggle="modal" data-target="#modal-lx'.$bus->id.'">
 Edit

     </button>


      </div></td>
<td><div class="card-tools">
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-sm'.$bus->id.'">
  DELETE
     </button> 
                                   

      
     </div></td>

         </tr>';
   
          }
         }
         else
         {
          $output = '
          <tr>
           <td align="center" colspan="5">No Data Found</td>
          </tr>
          ';
         }
      
         echo json_encode($output);
        }  
    }
    public function offer(Request $request)
    {
        if($request->ajax())
        {
         $output = '';
         $query = $request->get('query');
         
         if($query != '')
         {
             $check=Business::where('name','like','%'.$query.'%')->first();
              $data = Offers::where('business_id','.$check->id.')->get();
         }
         else
         {
          $data = Offers::all();
         }
         $total_row = $data->count();
         if($total_row > 0)
         {
          foreach($data as $offer)
          {
           $output .= '
           <tr>
           <td>'.$offer->buus->name.'</td>
           <td><img id="admin"src="data:image/png;base64,'.$offer->image.'"></td>
          <td>'.$offer->status.'</td>
<td><div class="card-tools">
<button type="button"id="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-kk'.$offer->id.'">
  EDIT
     </button>   

<button type="button"id="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-sm'.$offer->id.'">
   DELETE
     </button> 
                                  
      
     </div></td>
         </tr>';
   
          }
         }
         else
         {
          $output = '
          <tr>
           <td align="center" colspan="5">No Data Found</td>
          </tr>
          ';
         }
      
         echo json_encode($output);
        }
    }
}
