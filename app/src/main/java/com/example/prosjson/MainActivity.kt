package com.example.prosjson
import android.annotation.SuppressLint
import android.os.Bundle
import android.util.Log
import android.widget.Button
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity
import com.android.volley.Request
import com.android.volley.toolbox.JsonObjectRequest
import com.android.volley.toolbox.Volley
import org.json.JSONException
import java.text.SimpleDateFormat
import java.util.*


class MainActivity : AppCompatActivity() {
    @SuppressLint("MissingInflatedId")
    lateinit var txt: TextView
    lateinit var txt2: TextView
    @SuppressLint("MissingInflatedId")
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        txt = findViewById(R.id.textView)
        txt2 = findViewById(R.id.textView3)

        var button: Button = findViewById(R.id.Enter)
        button.setOnClickListener {
            txt2.text="Coordinadores mayores de 60 años"
            consulta()
        }
    }
    @SuppressLint("SimpleDateFormat")
    fun consulta() {
        val queue = Volley.newRequestQueue(this)
        val url = "http://10.0.2.2:8080/prosJSON/verInsertarCoordinador.php"

        val jsonObjectRequest = JsonObjectRequest(
            Request.Method.GET, url, null,
            { response ->
                try {
                    val string=java.lang.StringBuilder()
                    val datosArray= response.getJSONArray("Datos")
                    for (i in 0 until datosArray.length()) {
                        val jsonObject = datosArray.getJSONObject(i)
                        val fechaNac = jsonObject.getString("fechaNac")
                        val cal = Calendar.getInstance()
                        val year = cal.get(Calendar.YEAR)
                        val month = cal.get(Calendar.MONTH) + 1
                        val day = cal.get(Calendar.DAY_OF_MONTH)
                        val fechaActual = "$year-$month-$day"
                        val dob = SimpleDateFormat("yyyy-MM-dd").parse(fechaNac)
                        cal.time = dob
                        var edad = year - cal.get(Calendar.YEAR)
                        if (month < cal.get(Calendar.MONTH) + 1 || (month == cal.get(Calendar.MONTH) + 1 && day < cal.get(Calendar.DAY_OF_MONTH))) {
                            edad--
                        }
                        if (edad > 60) {
                            val nombres = jsonObject.getString("nombres")
                            val apellidos = jsonObject.getString("apellidos")
                            val id = jsonObject.getString("idC")
                            Log.i("JSON", "$nombres $apellidos $edad años" )
                            string.append("$id : $nombres $apellidos $edad años \n")
                            txt.text=string.toString()
                        }
                    }

                } catch (e: JSONException) {
                    Log.e("JSON", e.toString())
                }
            },
            { error ->
                Log.e("JSON", error.toString())
            }
        )

        queue.add(jsonObjectRequest)

    }
}


