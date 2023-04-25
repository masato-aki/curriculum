import java.util.ArrayList;
import java.util.Arrays;
import java.util.Calendar;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class Main {

	public static void main(String[] args) {
		
//      問① 下記例の配列をString型しか格納できないように修正してください。
//		現状は全てのクラスの継承元であるObject型を指定しているので、Integerもintも格納可能になっています。
//	       例List<Object> array = new ArrayList<>();
//		また、arrayには[hoge, pos, foo]の文字列３要素を入れてください。
//	    <以下記述>
        List<String> array=new ArrayList<String>();
        array.add("hoge");
        array.add("pos");
        array.add("foo");

//      問② arrayの二つ目の要素を"bar"にしましょう。
//	　  <以下記述>
        array.set(1, "bar");

//      問③ fooが格納されているインデックスを出力してください。
//	　  <以下記述>
            System.out.println(array.get(2));
		}

		{

//      問④ キーがString型、バリューがObject型の要素を三つ格納しましょう。
           // <以下記述>
        Map<String, Object> Map = new HashMap<>();
        Map.put("iminai", "hoge");
        Map.put("reji", "pos");
        Map.put("meta", "foo");

//      問⑤上記で格納したキーを繰り返し文で出力しましょう。
//	    <以下記述>
        for(String key : Map.keySet()){
              System.out.println(key);
        }

//      問⑥上記で格納したバリューを繰り返し文で出力しましょう。
//	    <以下記述>
        for(Object value : Map.values()){
             System.out.println(value);
	}
        
//      問⑦ Calender型calを使い、int型配列arrayDateに今の年・月・日を入れてください。
           Calendar cal = Calendar.getInstance();
//	    <以下記述>
        int[]arrayDate={cal.get(Calendar.YEAR),cal.get(Calendar.MONTH)+1,cal.get(Calendar.DATE)};

//      問⑧ 配列arrayDateをList型に置換しましょう。
//      ヒント：asListメソッドはプリミティブ型のデータ型のみ扱えます。
//	    <以下記述>
            List<int[]> list = Arrays.asList(arrayDate);
            
//      問⑨ 上記で格納した要素を繰り返しで出力しましょう。
//	    <以下記述>
        for(int[] value : list){
        for(int date : value){
        
        System.out.println(date);
        }
        }
        }
        }
    
