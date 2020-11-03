package com.soap.service;
import javax.xml.ws.Endpoint;

public class SoapService {
	
	public static void main(String[] args) {
		String url = "http://0.0.0.0:9000/CursoService"; //por default docker expone la ip 0.0.0.0
		Endpoint.publish(url, new CursoService());
		System.out.println("Servicios iniciado @ " + url);
	}
}
