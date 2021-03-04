import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})


export class DataService {
  public jobs = [] ;
  constructor(private httpClient:HttpClient) { 
    
}
getData(id:string){
  return this.httpClient.get('http://127.0.0.1:5000/api/jobs/'+id)

}
}