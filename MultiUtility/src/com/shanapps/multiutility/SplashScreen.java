package com.shanapps.multiutility;

import android.app.Activity;
import android.content.Intent;
import android.graphics.Typeface;
import android.os.Bundle;
import android.os.Handler;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;

import com.daimajia.androidanimations.library.Techniques;
import com.daimajia.androidanimations.library.YoYo;

/**
 * Created by PrinceShan31 on 26-Jun-15.
 */
public class SplashScreen extends Activity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,
                WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.splash_activity);
        TextView tx = (TextView)findViewById(R.id.textView4);
        TextView tx1 = (TextView)findViewById(R.id.textView5);
        TextView tx2 = (TextView)findViewById(R.id.textView6);
        Typeface custom_font = Typeface.createFromAsset(getAssets(), "mont.otf");
        Typeface custom_font1 = Typeface.createFromAsset(getAssets(), "Montserrat-Bold.otf");
        tx.setTypeface(custom_font1);
        tx1.setTypeface(custom_font);
        tx2.setTypeface(custom_font);

        ImageView i = (ImageView) findViewById(R.id.imageView2);
        (new Thread(new Runnable()
        {

            @Override
            public void run()
            {
                while (!Thread.interrupted())
                    try
                    {
                        Thread.sleep(1200);
                        runOnUiThread(new Runnable() // start actions in UI thread
                        {

                            @Override
                            public void run()
                            {
        YoYo.with(Techniques.Pulse)
                .duration(700)
                .playOn(findViewById(R.id.imageView2));

                            }
                        });
                    }
                    catch (InterruptedException e)
                    {
                        e.printStackTrace();
                    }
            }
        })).start();



    new Handler().postDelayed(new Runnable() {

			/*
			 * Showing splash screen with a timer. This will be useful when you
			 * want to show case your app logo / company
			 */

            @Override
            public void run() {
                // This method will be executed once the timer is over
                // Start your app main activity
                Intent i = new Intent(SplashScreen.this, MainActivity.class);
                startActivity(i);

                // close this activity
                finish();
            }
        }, 6000);
    }

}
